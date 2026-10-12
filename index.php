<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/data.php';

?>


<h1>Some teams</h1>

<p>Introtext homepage</p>

<!-- Container gathering all teams -->
<section class="teamsContainer">
    <!-- List item (set up to: Iterate and render home-page view of each team in parent-list)-->
    <!-- nested list: containing team-info -->
    <?php $i = 1; ?>
    <?php foreach ($teams as $key => $value): ?>
        <ul class="teamItem">
            <li>
                <!-- Heading: team name (retrieved from data.php)-->
                <h2>
                    <?php echo $key; ?>
                </h2>
            <li>
                <a id="<?php echo $i; ?> " href=" <?php echo 'index.php?id=' . $i; ?> ">
            </li>
            <!-- If... else statement inside foreach-loop -> render team logo with a default img/logo -->
            <?php if (file_exists($teams[$key]['logo'])): ?>
                <img src='<?= $teams[$key]['logo']; ?>' alt="team logo">
            <?php else: ?>
                <img src='<?= $teams[$key]['logo_uefa'] ?>' alt="uefa logo" />
            <?php endif; ?>
            </a>
            </li>
        </ul>
        <?php $i++; ?>
    <?php endforeach; ?>
</section>