<?php 
    include "config.php"; 
    if(isset($POST['submit'])) {
        $firs_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST('email');
        $gender = $_POST['gender'];
    } 
    $sql = "INSERT INTO 'users' ('firstname','lastname','email','password','gender') VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn-> query($sql);
    if($result == TRUE){
        echo "now record created succesfully";
    }else {
        echo "Error" . $sql . "<br>" . $conn-> error;
    }

    $conn -> close();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <fieldset> 
                <legend>Personal Information</legend>
                <input type="text" name="firsname">
                <br> 
                Last Name: 
                <br> 

                <input type="text" name="lastname">
                <br> 
                Email: 
                <br> 
                <input type="email" name="email" id="">
                <br>
                Password:
                <br> 
                <input type="password" name="passwrd">
                <br> 
                Gender 
                <br> 
                <input type="radio" name="gender" value="Male" id=""> Male 
                <input type="radio" name="gender" value="Female" id="">Female
                <br> 
                <br> 
                <input type="submit" name="submit" value="submit">

            </fieldset>
        </form>
    </body>
    </html>