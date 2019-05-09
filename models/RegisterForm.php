<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class RegisterForm extends Model
{


    public $firstname;
    public $lastname;
    public $phone;
    public $comment;
    public $address;
    public $step;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'trim'],
            [['firstname', 'lastname', 'phone'], 'required'],
            ['phone', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This phone has already been taken.'],
            [['firstname', 'lastname', 'comment', 'address'], 'string', 'min' => 2, 'max' => 255],
            [['phone'], 'match', 'pattern' => '/^[0-9]{10}$/', 'message' => 'Enter the number in the specified format.'],
        ];
    }

    /**
     * Registration user.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function registration()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = new User();

        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->phone = $this->phone;
        $user->comment = $this->comment;
        $user->address = $this->address;
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }

}