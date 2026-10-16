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
        <nav>
            <ul class="navLinkList">
                <li>
                    <a id="titleLogo" href="index.php">Some Teams</a>
                </li>
                <li>
                    <!-- navigational links to the sites two pages -->
                    <div class="navLinks">
                        <a href="index.php">Home</a>
                        <a href="about.php">About</a>
                    </div>
                </li>
            </ul>
            <!-- list of all the team logos: displayed in navbar horizontally and made into links to each team info-page-->
            <ul class="logoLinkList">
                <?php $i = 1; ?>
                <?php foreach ($teams as $key => $value): ?>
                    <li>
                        <a id="<?php echo $i; ?> " href=" <?php echo 'info.php?id=' . $i; ?> ">
                            <img src="<?= $teams[$key]['logo_uefa'] ?>" alt="uefa logo">
                        </a>
                    </li>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>