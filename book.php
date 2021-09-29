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
            <img src="images/logo.png" alt="Al-Haiat Hospital Logo ">
            <h2>Al-Haiat Hospital </h2>
        </div>
       
    <div class="book">
        <p>Welcome to Al-Haiat Hospital, Please fill in the form to make an appointment</p>

        <form action="index.php" method="post">
            <input type="text" placeholder="Full Name" name="name"/>
            <input type="text" placeholder="Email Address" name="email"/>
            <input type="date" name="date" />
            <input type="submit" value="Make an appointment " name="send"/>
        </form>

        <?php
        //connect to database
        $host    ="localhost";   // Host Name
        $user    ="root";       // DB user
        $password="";           // DB user PASS
        $dbName      ="hospital";  // DB Name

        $conn = mysqli_connect($host,$user,$password,$dbName);


     //  get values from Form input fields and assign it to variables using POST method

        $pName  = $_POST['name'];
        $pEmail = $_POST['email'];
        $pDate  = $_POST['date'];
        $pSend  = $_POST['send'];

        if($pSend){
        
            $query = "INSERT INTO patients(name,email,date) VALUE ('$pName','$pEmail','$pDate')";

            $result= mysqli_query($conn,$query);

            echo "<p style='color:green'>"."Successfully done. "."</p>";
        }
        else {
            echo "<p style='color:green'>"."Something went wrong, please try again "."</p>";
        }

        

        ?>


    </div>
 </div>
</body>
</html>