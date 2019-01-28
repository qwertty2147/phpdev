<?php require 'connectDB.php';



    if($_POST["memberTypeName"]!=""){
        $typeName = $_POST["memberTypeName"];
        $typeNote = $_POST["typeNote"];
       

        $SQL = "INSERT INTO member_type (type_name,type_note)
                        VALUES ('$typeName','$typeNote')" ;

         echo "if success" ;

        if($conn->query($SQL)){
            echo "Add Type SUCCESSFUL";
        }
        else{
            echo "FAILED".$conn->error();
        }
    }

    


    
?>
    
