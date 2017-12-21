<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20-12-2017
 * Time: 16:10
 */

if (isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php");
    exit();

}

