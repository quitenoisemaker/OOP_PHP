
<?php

require ('user_validator.php');
if(isset($_POST['submit'])){

 
   $validation = new UserValidator($_POST);
   $errors = $validation->validateForm();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>mywork</title>
	<html lang="eng">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width" initial-scale="1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<style type="text/css">

    .errors{
      color: coral;
    }

 
	</style>
</head>
<body style="text-align: center;">
  
      <h1>Create user</h1>
         <form role="form" method="POST" action="">
      <div class="">
           <label for="name">User Name:</span></label>
          <input type="text" value="<?php if(isset($_POST['submit'])) echo htmlspecialchars($_POST['username']) ?? '' ?>" class="form-control" id="text" name="username" placeholder="Enter name " >
        </div>

        <div class="errors">
          <?php echo $errors['username'] ?? ''; ?>
        </div>
        
        <br>
        <div class="">
           <label for="email">Email address:</span></label>
          <input type="text" value="<?php  if(isset($_POST['submit']))echo htmlspecialchars($_POST['email']) ?? '' ?>" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        <div class="errors">
          <?php echo $errors['email'] ?? ''; ?>
        </div>

        <br>
          
               <button type="submit" name="submit" class="btn btn-danger btn-block"><span style="">Submit</span></button>
     </form>
        
  
      
      
  

</body>
</html>