

<?php

/*Parent Class*/
class User {


	public $username;
	protected  $email;  
	public $role='member'; 

	public function __construct($username, $email){ 
		$this->username = $username; 
		$this->email = $email;
	}

	/*The destruct method is use to remove reference from a variable     */
	public function __destruct(){

		echo "the user $this->username was removed <br>";
	}

	public function __clone(){

		$this->username = $this->username . '(clone)<br>';
	}

	// here we're defining the method i.e what the object can do
	public function addFriend() {

		$user= $this->username;

		return " $user added a new friend";
	}

	



}

/*Inheriting from the parent class*/

class AdminUser extends User{

	public $level;
	public $role ='Admin'; 



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

// unset($userOne);// it remove the instance to the reference $userOne

$userFour=clone $userOne; ///here we are cloning $userOne and assigning it to $userFour

echo $userOne->username . '<br>';




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>