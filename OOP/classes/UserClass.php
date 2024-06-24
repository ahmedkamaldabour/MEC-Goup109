<?php

include 'PersonClass.php';

// PSR-4 php standard recommendation


// child class
// subclass
// derived class
class UserClass extends PersonClass
{
    private $email;
    private $password;
    private $is_admin;

    public function __construct($email, $password, $is_admin, $name, $age, $address)
    {
        parent::__construct($name, $age, $address);
        $this->email = $email;
        $this->password = $password;
        $this->is_admin = $is_admin;
    }

    public function overide()
    {
        parent::overide();
        echo "\nthis is child class method";
    }

    /**
     * @return mixed
     */
    public
    function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public
    function setEmail($email): void
    {
        $this->email = $email;
    }

    public
    function getUserData()
    {
        return $this->name . ' - ' . $this->email . ' - ' . $this->age . ' - ' . $this->address . ' - ' . $this->is_admin . ' - ' . $this->password;
    }
}

$user = new UserClass('test@gmailcom', '123456', true, 'John Doe', 30, 'New York');
$user->overide();
//echo $user->getUserData();


// access modifiers
// public scope   -  same class  -  child class
// public           *              *                       *
// protected                       *                       *
// private                         *