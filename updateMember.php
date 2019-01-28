<h2>Update Member</h2>
<?php require 'connectDB.php'; 
$idEdit=$_GET["id"];

    $username = $_POST["username"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $hobbies0 = $_POST["hobbies0"];
    $hobbies1 = $_POST["hobbies1"];
    $hobbies2 = $_POST["hobbies2"];
    $hobbies3 = $_POST["hobbies3"];

    $hobbies = $hobbies0." , ".$hobbies1." , ".$hobbies2." , ".$hobbies3;

    $SQL = "UPDATE member SET username='$username',
        gender='$gender',
        age='$age',
        fullname='$fullname',
        address='$address',
        hobbies='$hobbies'
        WHERE id=$idEdit"; 
        $query = $conn->query($SQL);

       
    if($conn->query($SQL)){
        echo "UPDATE DATA SUCCESSFUL";
        echo "<br> <a href='member_list.php'> Show Member List </a>";
    }
    else{
        echo "FAILED".$conn->error();
        echo "<br> <a href='member_list.php'> back Member List </a>";
    }


?>