<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sophie Cooper</title>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/interact.min.js"></script>
    <link rel="stylesheet" href="styles/site.css">
</head>
<body>

<header>
    <h1>Sophie Cooper</h1>

    <nav>
        <ul>
            <li>Portfolio</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>
</header>

<?php
include('dal.php');
$collections = getCollections($db);
?>

<script src="js/site.js"></script>
</body>
</html>