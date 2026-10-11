<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/about.php';
require_once __DIR__ . '/data.php';
?>


<h1>Some teams</h1>

<p>Introtext homepage</p>

<section>
    <!-- Container gathering all teams -->
    <ul class="teamsContainer">
        <!-- List item (set up to: Iterate and render home-page view of each team in parent-list)-->
        <?php foreach ($teams as $key => $value): ?>
            <li>
                <!-- nested list: containing team-info -->
                <ul class="teamItem">
                    <li>
                        <!-- Heading: team name (retrieved from data.php)-->
                        <h2>
                            <?= $key; ?>
                        </h2>
                    </li>
                    <li>
                        <!-- If... else statement inside foreach-loop -> render team logo with a default img/logo -->
                        <?php if (file_exists($teams[$key]['logo'])): ?>
                            <img src='<?= $teams[$key]['logo']; ?>' alt="team logo">
                        <?php else: ?>
                            <img src='<?= $teams[$key]['logo_uefa'] ?>' alt="uefa logo" />
                        <?php endif; ?>
                    </li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</section>