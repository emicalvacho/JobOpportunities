<?php 
    function inputHidden($name='', $valor=''){
        echo "<input type='hidden' name='".$name."' value='".$valor."'>"; 
    }

    function checkPost($post){
        echo "<pre>";
        var_dump($post);
        echo "</pre>";
    }

    function checkQuery($query){
        echo "<p>". $query."</p>";
    }

    function checkArrayQuery($array){
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }
?>