<?php
$user = $_GET['user'];
$json = json_decode(file_get_contents('https://mcapi-th.cf/mcapi/v1/status/api.php?host=teracube.mcpe.eu&port=19144'));

if ($user == $json->players->players)
    {
        echo "Success";
        
    }else{
        echo "Failed";
        
    }
    
    
    