<?php
$user = "artty";
$password = "1234";
setcookie($user,"artty",time() +(60000*30),"/");
setcookie($password,"1234",time() +(60000*30),"/");
?>
<a href="readCookie.php"> Show Cookie </a>