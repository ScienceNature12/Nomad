<?php
include("db.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $birth=$_POST['birth'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $email=$_POST['email'];
    
    if(isset($_POST['male'])){
        $gender= "male";
    }
    if(isset($_POST['female'])){
        $gender= "female";
    }

    if(isset($_POST['en'])){
        $language= "English";
    }
    if(isset($_POST['noen'])){
        $language= "No English";
    }

    $about=$_POST['about'];

    $query= "INSERT INTO USER (username, password, BirthDate, Address, Country, zip, email, gender, language, about)".
    "VALUES ('$username', '".md5($pass)."', '$birth', '$address', '.$country.', '$zip', '$email', '$gender', '$language', '$about')";

    $result= mysqli_query($conn, $query);
    if($result) {
        session_start();
    $_SESSION['username']=$username;
    header("Location: dashbord.php");
    }
    else{
        echo "<script> alert(\"Cannot register\");</script>";
    }   
    
  
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JavaScript Form Validation using a sample registration form</title>
   

</head>

<body>
    <h1>Registration Form</h1>
    <form name="registration" method="post">
        <table width="30%">
            <tr>
                <td><label for="userid">User id:</label></td>
                <td><input  type="text" size="50" name="userid" /></td>
                <tr>


                    <tr>
                        <td> <label for="passid">Password:</label></td>
                        <td><input  type="password" name="password" size="50" ></td>
                    </tr>

                    <tr>
                        <td><label for="username">Name:</label></td>
                        <td><input  type="text" name="username" /></td>
                    </tr>
                    <tr>
                        <td><label for="Birthdate">Birth Date:</label></td>
                        <td><input  type="date" size="50" name="birth" /></td>
                    </tr>
                    <tr>
                        <td><label for="address">Address:</label></td>
                        <td><input  type="text" size="50" name="address" /></td>
                    </tr>
                    <tr>
                        <td><label for="country">Country:</label></td>
                        <td>
                            <?php 
                            $q="SELECT * FROM country";
                            $result= mysqli_query($conn, $q);
                            $num = mysqli_num_rows($result);

                            echo "<select name=\"country\">";
                            echo "<option value=o>Select Country</option>";
                            for($i=1; $i<=$num; $i++){
                                $row=mysqli_fetch_row($result);
                                echo "<option value=".$row[0].">".$row[1]."</option>";



                            }
                            echo "</selct>";

                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="zip">ZIP Code:</label></td>
                        <td><input id="zip" type="number" name="zip" /></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="text" size="50" name="email" /></td>
                    </tr>
                    <tr>
                        <td><label>Sex:</label></td>
                        <td><input type="radio" name="male" value="Male" id="male" /><span>Male</span>
                            <input type="radio" name="female" value="Female" id="female" /><span>Female</span></td>
                    </tr>
                    <tr>
                        <td><label>Language:</label></td>
                        <td><input type="checkbox" value="en"  name="en"/><span>English</span>
                            <input type="checkbox" value="noen"  name="noen" /><span>Non English</span></td>
                    </tr>
                    <tr>

                        <td><label for="desc">About:</label></td>
                        <td><textarea   cols="40" rows="7" name="about"></textarea></td>
                    </tr>
        </table>
        <input type="submit" value="Register" name="submit"/>
        <p>Already have an account <a href="login.php">Login</a>

    </form>
   
</body>

</html>