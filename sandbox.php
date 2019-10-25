<?php 
//classes

class User {

    private $email;
    private $name;

    public function __construct($name, $email) {
        // $this->email = 'mario@gmail.com';
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;
    }


    public function login() {
        echo $this->name . ' logged in';
    }
    //getter to access name outside function
    public function getName() {
        return $this->name;
    }

    //setter for name
    public function setName($name) {
        //check argument is a string and is greater than 1 char long
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return 'not a valid name';
        }
    }

}

    // $userOne = new User();

    // $userOne->login();
    // echo $userOne->email;

    $userTwo = new User('yoshi', 'yoshi@gmail.com');
    //can overide name anywhere if its public eg:
    // $userTwo->name = 'mario';
    // echo $userTwo->name;

    // echo $userTwo->getName();
    echo $userTwo->setName('Ryan');
    echo $userTwo->getName();
?>

