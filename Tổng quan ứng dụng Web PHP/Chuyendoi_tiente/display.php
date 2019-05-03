<?php
    if (isset($_POST['submit'])){
        $value = $_POST['text'];
        if($_POST['select1']=="USD"&& $_POST['select2']=="VND"){
            echo
                "$value USD = " .($value*23000) ."VND";
        }
        if($_POST['select1']=="VND"&& $_POST['select2']=="USD"){
            echo
                "$value VND = " .($value/23000) ."$";
        }
        else{
            echo
                "Wrong convert select"
        }
    }