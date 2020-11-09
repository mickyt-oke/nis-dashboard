<?php
include_once 'core/init.php';

    if ($ref=@$_GET['q']) {
        if ($_POST["pass"] == "n1s245") {
            header("location:return-manager.php");
        } else if ($_POST['pwd'] == "@dm1n") {
            header("location:dashboard.php?r=2");
        } else if ($_POST["pasw"] == "1mm1g45") {
            header("location:dashboard.php?r=3");
        } else if ($_POST["pswd"] == "s3rv1x") {
            header("location:dashboard.php?r=4");
        } else {
            header("location:$ref?w=Wrong Passcode");
        }
    }
?>