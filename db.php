<?php
//connect to db
$conn = new PDO('mysql:host=localhost;dbname=opp_web_app', 'opp_user', 'jpSRz4x3R5peATJK');

// trap any PDO errors when working with the database
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>