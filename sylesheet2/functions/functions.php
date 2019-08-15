<?php
    require_onse "php/connect.php";
    function getNews($limit, $id){ 
    global $mysqli;
    connectDB():
    if($id)
         $where ="WHERE 'id'="..$id;
        $result = mysqli->guery("SELECT  * FROM 'news' ORDER BY 'id' DESC LIMIT $limit")
     closeDB();
     if(!$id)
     return resultToArray ($result);
     else 
     return $result->fatch_assoc();
    }
    function resultToArray ($result){
    $array = array();
   
    while(($row = $result -> fatch_assoc()) != false )
    $array [] =$row;
    return $array;
    }
?>