<?php require 'connectDB.php'; 
$idEdit=$_GET["id"];

if($_POST["type_name"]!=""){
    $typeName = $_POST["type_name"];
    $typeNote = $_POST["type_note"];
   

    $SQL = "UPDATE member_type
    SET type_name='$typeName',
        type_note='$typeNote'
        WHERE type_id=$idEdit"; 
        $query = $conn->query($SQL);

       
    if($conn->query($SQL)){
        echo "UPDATE MEMBER TYPE SUCCESSFUL";
       
    }
    else{
        echo "FAILED".$conn->error();
        
    }
}

?>