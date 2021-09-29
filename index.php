<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al-Haiat Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
</head>
<body>
<div class="main">
        <div class="logo">
            <img src="images/logo.png" alt="Al-Haiat Hospital Logo">
            <h2>Al-Haiat Hospital</h2>
        </div>
       
    <div class="book">
    <p>Welcome to Al-Haiat Hospital, Please fill in the form to make an appointment</p>

        <form action="index.php" method="post">
            <input type="text" placeholder="User Name" name="usrname" required />
            <input type="password" placeholder="Password " name="usrpass" required />
            
            <input type="submit" value="Sign in " name="send"/>
        </form>

        <?php
        //connect to database
        $host    ="localhost";
        $user    ="root";
        $password="";
        $dbName      ="hospital";

        $conn = mysqli_connect($host,$user,$password,$dbName);


     //  get values from Form input fields and assign it to variables using POST method

        $pName  = $_POST['usrname'];
        $usrpass = $_POST['usrpass'];
        $pSend  = $_POST['send'];

        if($pSend){
            // SQL statement: check USername if exists in DataBase
            $query = "select * From usr(usrname,pass) WHERE $pName='raad'&& $usrpass='123'";

            $result= mysqli_query($conn,$query);

            echo "<p style='color:green'>"."Login successfully"."</p>";
        }
        else {
            echo "<p style='color:green'>"."Something went wrong, please try again "."</p>";
        }

        ?>


    </div>
 </div>
</body>
</html>