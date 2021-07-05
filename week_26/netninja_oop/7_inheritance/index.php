<?php

//INHERITANCE
//One class inherits properties and methods from another.
//Parent to child
//User Class to Admin_User Class
//User Class to Moderator Class
//User: username, email, add_friend()
//Admin_User: username, email, add_friend(), admin_level
//Moderator: username, email, add_friend(), report_user()

//Class names are capitalised and singular.
class User
{
    //Define the properties.
    //The values will be assigned by the constructor.
    //They will depend on the parameters entered when an instance is created.
    //'public' means the property can be accessed from inside and outside the class.
    //'private' means the property can only be accessed within the class.
    //Make a property private to restrict access to a property so that it can't be changed
    //or when you want more control over how it can be changed.
    public $username;
    private $email;

    //Constructors are created inside the class
    //Constructors are fired when an instance is created
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function add_friend()
    {
        //$this = this instance of the class
        return "$this->username added a new friend";
    }

    //Getters allow us to access private properties from outside the class.
    //Getters are 'public' to allow us to access them from outside the class.
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    //Setters allow us to change the value of private properties from outside the class.
    //Setters are 'public' to allow us to access them from outside the class.
    public function setEmail($email)
    {
        //Validate the email address using strpos (string position).
        //if '@' is in the string, return an integer between 0 and the length of the
        //string depending on its position.
        //if '@' is not in the string, -1 is returned.
        if(strpos($email, '@') > -1)
        {
            $this->email = $email;
        }
    }
}

class Admin_User extends User
{
    //When we create a new instance of the class Admin_User:
    //The code looks for a constructor in Admin_User, if it doesn't find one it looks in its parent User.
    //The constructor in the parent User then fires using the parameters passed to the new instance.
    //We then need a new construct method in Admin_User in order to pass the property '$level'.
    //The new construct method then calls the construct method in the parent User.

    public $level;

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
}

$user_one = new User('mario', 'mario@email.com');
$user_two = new User('luigi', 'luigi@email.com');
$user_three = new Admin_User('yoshi', 'yoshi@email.com', 5);

//Display the public property '$username' inherited from the User Class.
echo $user_three->username."<br>";
//Display the private property '$email' using the getter 'getEmail
echo $user_three->getEmail()."<br>";
echo $user_three->level."<br>";