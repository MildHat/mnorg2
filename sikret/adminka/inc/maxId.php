<?php
    include ("connection.php");

    $maxIdProjects = mysqli_query($con, "SELECT max(`id`) FROM projects");
    $maxIdProjects = mysqli_fetch_assoc($maxIdProjects);
    $maxIdProjects = $maxIdProjects['max(`id`)'];

    $maxIdBooks = mysqli_query($con, "SELECT max(`id`) FROM books");
    $maxIdBooks = mysqli_fetch_assoc($maxIdBooks);
    $maxIdBooks = $maxIdBooks['max(`id`)'];

    $maxIdPeople = mysqli_query($con, "SELECT max(`id`) FROM people");
    $maxIdPeople = mysqli_fetch_assoc($maxIdPeople);
    $maxIdPeople = $maxIdPeople['max(`id`)'];

    $maxIdPartners = mysqli_query($con, "SELECT max(`id`) FROM AboutUs_partners");
    $maxIdPartners = mysqli_fetch_assoc($maxIdPartners);
    $maxIdPartners = $maxIdPartners['max(`id`)'];

    $maxIdLive = mysqli_query($con, "SELECT max(`id`) FROM live");
    $maxIdLive = mysqli_fetch_assoc($maxIdLive);
    $maxIdLive = $maxIdLive['max(`id`)'];

    $maxIdNews = mysqli_query($con, "SELECT max(`id`) FROM news");
    $maxIdNews = mysqli_fetch_assoc($maxIdNews);
    $maxIdNews = $maxIdNews['max(`id`)'];
?>
