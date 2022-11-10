<?php
include("auth_session.php");
include("db.php");



$username= $_SESSION['username'];
?>

<html>
<head> 
    <title> Dashborad Page</title>
</head>
<body>
    <p> Hey, <?php echo $username ?> ! </p>
    <p> you are in the home page </p>
    <p> <a href="logout.php">Logout </a> </p>

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

    

    $query ="SELECT * FROM product WHERE userid=(SELECT id FROM user WHERE username='$username')";
    $result=mysqli_query($conn, $query);
    $num=mysqli_num_rows($result);

    echo "<table border=1>";
    echo "<tr><th>Product Name </th> <th>Price</th> </tr>";
    for ($i=1;$i<=$num;$i++)
    {
        $row=mysqli_fetch_row($result);
        echo "<tr>";
        echo "<td><a href=\"product.php?id=".$row[0]."\">".$row[1]."</a></td> <td>".$row[2]."</td></tr>";
    }

    ?>
</body>
    </html>