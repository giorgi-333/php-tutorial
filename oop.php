
<?php

class User {
    public $name;
    public $lastName;
    public $mail;

    function __construct($name,$lastName,$mail) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->mail = $mail;
    }

    function printAllData() {
        print $this->name . "<br>" . $this->lastName . "<br>" . $this->mail . "<br> ----- <br>";
    }
}

$user1 = new User("giorgi","eradze","giorgi@gmail.com");
$user2 = new User("nika","gagnidze","nika@gmail.com");

print $user1->printAllData();
print $user2->printAllData();

?>