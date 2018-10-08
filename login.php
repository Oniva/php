<head>
        <title>PHP Practice</title>
        <link rel="stylesheet" href="index.css">
</head>
<div class="center-div">
<?php
    $name = $_POST["name"];
    if($name === "David")
        echo "Welcome, Admin";
?>