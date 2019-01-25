
<!DOCTYPE html>
<html>
<body>

<?php
$score=10;
$txt= "your have score : ",$score,"<br> your grade : ";

if($score<49){
    
    echo $txt," F";
}
elseif($score<=59){
    
    echo $txt," D";
}
elseif($score<=69){
    
    echo $txt," C";
}
elseif($score<=79){
    
    echo $txt," B";
}
elseif($score>80&&$score<=100){
    
    echo $txt," A";
}
else
{
    echo "False";
}

?> 

</body>
</html>