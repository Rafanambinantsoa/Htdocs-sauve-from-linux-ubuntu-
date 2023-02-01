<?php
    function init_session(){
        session_start();
    }

    function end_session(){
        session_unset();
        session_destroy();
    }
?>