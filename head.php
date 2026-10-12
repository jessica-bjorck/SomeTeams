<?php
require_once __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Some Teams</title>
</head>

<body>
    <!-- recurring header/navbar -->
    <header>
        <!-- container for title/logo, link back to homepage -->
        <div class="navTitle">
            <a href="index.php">Some Teams</a>
        </div>
        <nav>
            <ul class="navList">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <!-- list of all the team logos: displayed in navbar horizontally (links?) -->
            <ul class="logoLinkList">
                <?php foreach ($teams as $key => $value): ?>
                    <li>
                        <a>
                            <!-- If... else statement inside foreach-loop -> render team logo with a default img/logo -->
                            <?php if (file_exists($teams[$key]['logo'])): ?>
                                <img src='<?= $teams[$key]['logo']; ?>' alt="team logo">
                            <?php else: ?>
                                <img src='<?= $teams[$key]['logo_uefa'] ?>' alt="uefa logo" />
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>