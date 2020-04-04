

<?php

/*Parent Class*/
class User {


	public $username; //Public was added to the varaible so it can be access by all
	protected  $email;  // can be access inside the class it was declared and also any sub class can access as well
	public $role='member'; // here we hard coding the property

	public function __construct($username, $email){ 
		$this->username = $username; //here we get the username and assigning "ken" to it
		$this->email = $email;
	}

	// here we're defining the method i.e what the object can do
	public function addFriend() {

		$user= $this->username;// the $this keyword helps us to gain access to the property of a class

		return " $user added a new friend";
	}

				/*creating another method that send email*/
	public function message() {

		$email= $this->email;// the $this keyword helps us to gain access to the property of a class

		return " $email sent a new message";
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

/*Inheriting from the parent class*/

class AdminUser extends User{// here we are using inheritance to inherit the property of the class User

	public $level;
	public $role ='Admin'; // over riding the role property in the parent class


	public function __construct($username, $email, $level){
		$this->level = $level;//here we are difining a new property
		parent::__construct($username, $email);//Here we are calling the parent construct
	}


	public function message() {

		$email= $this->email;// the $this keyword helps us to gain access to the property of a class

		return " $email, an admin, sent a new message";
	}


}

/*End of inheritance*/

$userOne = new User('john', 'john@yahoo.com'); //process of creating a new class from the class define is instantiation
$userTwo = new User('peter', 'peter@yahoo.com'); // creating new user in the future

$userThree = new AdminUser('bee', 'bee@yahoo.com', 5);


echo $userThree->username .'<br>';
echo $userThree->getEmail() . '<br>';
echo $userThree->level . '<br>';
echo $userThree->role . '<br>';
echo $userOne->role . '<br>';
echo $userOne->message() . '<br>';
echo $userThree->message() . '<br>';


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>