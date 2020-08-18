<?php
$radio_us = "unchecked";
$radio_dogs = "unchecked";

if(isset($_POST["submit_slideshow"])) {
    $selected_radio = $_POST["folder"];

    if($selected_radio == "us") {
        $radio_us = "checked";
        
        header("Location: index.php");
    }
    else if($selected_radio == "dogs") {
        $radio_dogs = "checked";

        header("Location: index.php");
    }
}
?>
