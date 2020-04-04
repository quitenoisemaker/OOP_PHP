

<?php

class User {

//properties method.. Here we're difining the properties

	// Propert holds data for us
	public $username; //Public was added to the varaible so it can be access everywhere
	private  $email;  // can only be  access inside the class where it was declared

	public function __construct($username, $email){ //Construct helps us assign a value of a property in a class
		$this->username = $username; //here we get the username and assigning "ken" to it
		$this->email = $email;
	}

	// here we're defining the method i.e what the object can do
	public function addFriend() {

		$user= $this->username;// the $this keyword helps us to gain access to the property of a class

		return " $user added a new friend";
	}



	//getters

	public function getEmail(){

		return $this->email;
	}


	//setters

		public function setEmail($email){

			if (strpos($email, '@')) {
				$this->email = $email;
			}

		return $this->email;
	}


}

$userOne = new User('john', 'john@yahoo.com'); //process of creating a new class from the class define is instantiation
$userTwo = new User('peter', 'peter@yahoo.com'); // creating new user in the future

echo 'the class is '
. get_class($userOne);  // get_class helps us detect the class which a new object belongs

echo "<br>";

echo $userOne->username . '<br>';// here we grabbing the properties of the class
echo $userOne->getEmail() . '<br>'; // here we are using the Getter method to access the private property $email

echo $userOne->addFriend() . '<br>'; // here we grabbing the method of the class

echo "<br>";



echo $userTwo->username . '<br>';// here we grabbing the properties of the class
echo $userTwo->getEmail()  . '<br>'; // here we are using the Getter method to access the private property $email of userTwo

echo $userTwo->addFriend() . '<br>'; // here we grabbing the method of the class

print_r(get_class_vars('User'));//help us detect the properties of a particular class
echo "<br>";
print_r(get_class_methods('User'));//help us detect the method of a particular class

echo "<br>";
echo $userOne->setEmail('daddy@gmail.com'); // here we are assigning the private property a new value using getter

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>