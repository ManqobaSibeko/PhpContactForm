<?php

$nameError= "";
$emailError= "";
$genderError= "";
$websiteError= "";
$passwordError="";

if (isset($_POST['submit'])){

    if(empty($_POST["Name"])){
        $nameError="Name is Required";
    }else{
        $Name=Test_User_input($_POST["Name"]);
    }
     
    //email data
      if(empty($_POST["emailAddress"])){
        $emailError="Email address is Required";
    }else{
        $email = Test_User_input($_POST["email"]);
        if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)){
            $emailError ="Invalid Email-Address";
        }
    }

    //password
    if(empty($_POST["Password"])){
        $passwordError="Password is Required";
    }else{
        $password = Test_User_input($_POST["Password"]);
     
        }
    

    //gender dta inpput
        if(empty($_POST["Gender"])){
        $genderError="Gender is Required";
    }else{
        $gender = Test_User_input($_POST["Gender"]);
    }

    //website data input
      if(empty($_POST["Website"])){
        $websiteError="Website address is Required";
    }else{
        $website = Test_User_input($_POST["Website"]);
    }
    if (!empty($_POST["Name"]) && !empty($_POST["emailAddress"]) && !empty($_POST["Gender"]) && !empty($_POST["Password"])){
        echo "<h2>Your submit information</h2><br>";
        echo "Name: {$_POST["Name"]}<br>";
        echo "Email: {$_POST["emailAddress"]}<br>";
        echo "Password: {$_POST["passwordAddress"]}<br>";
        echo "Gender: {$_POST["Gender"]}<br>";
        echo "Website: {$_POST["Website"]}<br>";
        echo "comments: {$_POST["Comment"]}<br>";
    }else{
        echo "<h2>Please try again</h2>";
    }


}

  function Test_User_input($data){
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
     <h2>Form Validation with PHP</h2>

    <form action = "form.php" method="Post">
        <legend>* Please Fill Out The Following Fields.</legend>
        <fieldset>
            <br>Name:<br>
            <input class="input" type="text" Name="Name" value="" placeholder="Name">* <?php echo $nameError ; ?><br>

            <br> Email:<br>
            <input class="input" type="text" Name="emailAddress" value="" placeholder="Email-Address">*<?php echo $emailError ;?><br>

            <br>Password:<br>
            <input class="input" type="password" Name="Password" value="" placeholder="Password">* <?php echo $passwordError ; ?><br>

             <br>Gender:<br>
            Male<input class="radio" type="radio" Name="Gender" value="male">
            Female <input class="radio" type="radio" Name="Gender" value="female">*<?php echo $genderError ; ?><br>

             <br>Website:<br>
            <input class="input" type="text" Name="Website" value="" placeholder="Website">*<?php echo $websiteError; ?><br>

             <br>Comment:<br>
             <textarea Name="Comment" rows="5" cols="25"></textarea>*<br>

            <br> <input class="submit" type="submit" Name="submit" value="Submit Form" >*<br>
        </fieldset> 
    </form> 
</body>
</html>