<?php 
//classes

class User {

    public $email;
    public $name;

    public function __construct($name, $email) {
        // $this->email = 'mario@gmail.com';
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;
    }


    public function login() {
        echo $this->name . ' logged in';
    }


}

    // $userOne = new User();

    // $userOne->login();
    // echo $userOne->email;

    $userTwo = new User('yoshi', 'yoshi@gmail.com');
    echo $userTwo->name;
    echo $userTwo->email;
    $userTwo->login();

?>

