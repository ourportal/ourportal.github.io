<?php 
session_start();
session_destroy();
    setcookie("uid","",time()+86400*30*30); 
    echo "<script>location.href='./'</script>";

?>