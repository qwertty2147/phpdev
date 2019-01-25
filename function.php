<?php


function cal($x=0,$y=0,$oper){


    if($oper=="plus"){
        
        echo $x+$y;
    }
    elseif($oper=="multiple"){
        
        echo $x*$y;
    }
    elseif($oper=="minus"){
        echo $x-$y;
    }
    elseif($oper=="divine"){
        echo $x/$y; 
    }
    else{
        
    }
   
}
