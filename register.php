<?php
$servername = "localhost";
$username = "phpAccess";
$password = "phpHasPassword";
$dbname = "userRegistry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
/*-----------------------------------*/
//Start From Here
$UserStatement = "INSERT INTO userTable ( username, password, email, phone, website, age, birthday, satisfaction, favcolor, country, city, avatar, subscribeLevel, interests) VALUES (  ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$preparedUser = $conn->prepare($UserStatement);
$preparedUser->bind_param("sssssisissssis", $username, $password, $email, $phone, $website, $age, $birthday, $satisfaction, $favcolor, $country, $city, $avatar, $subscribeLevel, $interests);

    if(isset($_POST['username'])){
        $username = $_POST['username']??"";
    }
    if(isset($_POST['password'])){    
        $password = $_POST['password']??"";
    }
    if(isset($_POST['email'])){    
        $email = $_POST['email']??"";
    }
    if(isset($_POST['phone'])){    
        $phone = $_POST['phone']??"";
    }
    if(isset($_POST['website'])){    
        $website = $_POST['website']??"";
    }
    if(isset($_POST['age'])){    
        $age = $_POST['age']?? 0;
    }
    if(isset($_POST['birthday'])){    
        $birthday = date("Y-m-d", strtotime($_POST['birthday']?? "70"));
    }
    if(isset($_POST['satisfaction'])){    
        $satisfaction = $_POST['satisfaction']??100;
    }
    if(isset($_POST['favcolor'])){    
        $favcolor = $_POST['favcolor']??"";
    }
    if(isset($_POST['country'])){    
        $country = $_POST['country']??"";
    }
    if(isset($_POST['city'])){    
        $city = $_POST['city']??"";
    }
    if(isset($_FILES['avatar']['name'])){    
        $avatar = $_FILES['avatar']['name']??"";
    }
    if(isset($_POST['subscribe-level'])){    
        $subscribeLevel = $_POST['subscribe-level']=="Premium"? 2 : 1 ;//given by Database Design
    }
    
    if(isset($_POST['interests'])){    
        if(is_array($_POST['interests'])){
        $buffstr='';
        foreach($_POST['interests'] as $minum){
        $buffstr.=$minum.", ";
        }
        $interests=substr($buffstr,0,-2);
    } else {
        $interests = $_POST['interests']??"";        
    }
    }
    $preparedUser->execute();
/*-----------------------------------*/
//End Connection at end of file
$conn->close(); 

?>