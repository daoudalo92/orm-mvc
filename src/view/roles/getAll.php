<?php
    //print_r($data);
    foreach ($data as $role){
        //print_r($role);
        echo $role -> getId()." " .$role -> getNom() ."<br/>";
    }
?>