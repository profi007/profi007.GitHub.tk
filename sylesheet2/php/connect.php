<?php 
   $mysqli=false;
   function connectDB(){
       global $mysqli;
       $mysqli =New mysqli("localhost","root","","");
       $mysqli->guery("SET  NAMES 'utf_8");
   }
    function closeDB(){
      global $mysqli;
      $mysqli->close();
   }
?>