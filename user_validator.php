<?php



class UserValidator{

	private $data;
	private $errors = [];
	private static $fields = ['username', 'email'];


	public function __construct($post_data){
		$this->data = $post_data;
	}


	/*the function validateForm validates the form by using foreach to access the fields since it is in arrays and we use the "array_key_exist" to check if the different field exist in the $data and if do not exist it should trigger the error message but if it exist it should access the validateUsername and validateEmail     */

	public function validateForm(){

		foreach (self::$fields as $field) {
			# code...
			if (!array_key_exists($field, $this->data)) {

				trigger_error("$field is not present in data");
				return;
				
			}
		}

		$this->validateUsername();
		$this->validateEmail();
		return $this->errors;

	}

	private function validateUsername(){

		$val = trim($this->data['username']);

		if (empty($val)) {
			$this->addError('username', 'username cannot be empty');
		}else {
			if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
			$this->addError('username', 'username must be 6-12 chars and alphanumeric');
			}
		}

	}

	private function validateEmail(){

		$val = trim($this->data['email']);

			if (empty($val)) {
			$this->addError('email', 'email cannot be empty');
		}else {
			if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
			$this->addError('email', 'email must be a valid');
			}
		}


	}


	private function addError($key, $val){

		$this->errors[$key] = $val;
	}


}




?>