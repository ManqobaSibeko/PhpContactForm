<?php

if (isset($_POST["submitInclude"])){

    $name= $_POST["Name"];
    $password= $_POST["password"];

    if($name === "manqoba" && $password == "sibeko"){
        echo "welcome Ntwana";
    }else{
        echo "invalid";
    }
}else{
    echo "Login Require";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
</head>
<body>
     <h2>Form Validation with PHP</h2>

    <form action = "code.php" method = "Post" >
        <legend>* Please Fill Out The Following Fields.</legend>
        <fieldset>
            <br>Name:<br>
            <input id="name" type="text" Name="Name" value="" placeholder="Name">*<br>
            <br> Password:<br>
            <input id="password" type="password" Name="password" value="" placeholder="Password">*<br>
             <br>Gender:<br>
            Male<input class="radio" type="radio" Name="gender" value="male">
            Female <input class="radio" type="radio" Name="gender" value="female">*<br>
             <br>Website:<br>
            <input class="input" type="text" Name="Website" value="" placeholder="Website">*<br>
             <br>Comment:<br>
            <br> <input class="submitInclude" type="submit" Name="submitInclude" value="Submit Form" >*<br>
        </fieldset>
    </form> 
</body>
</html>