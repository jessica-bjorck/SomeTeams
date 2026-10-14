<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/data.php';
?>

<section class="teamInfoContainer">
    <?php $id = filter_input(INPUT_GET, 'id'); ?>
    <?php $i = 1; ?>
    <?php foreach ($teams as $key => $value): ?>
        <?php if ($i == $id): ?>
            <div class='subHeader'>
                <h1><?= $key; ?></h1>
                <img class="infoImage " src='<?= $teams[$key]['logo_uefa'] ?>' alt="uefa logo" />
            </div>
            <ul class='teamInfoList'>
                <li> <strong> <?= 'League' . ': '; ?> </strong> <?= $teams[$key]['league']; ?> </li>
                <li> <strong> <?= 'Uefa Coefficient Ranking' . ': '; ?> </strong> <?= $teams[$key]['uefa-coefficient-ranking']; ?> </li>
                <li> <strong> <?= 'League Position' . ': '; ?> </strong> <?= $teams[$key]['league-position']; ?> </li>
                <li> <strong> <?= 'City: ' . ': '; ?> </strong> <?= $teams[$key]['city']; ?> </li>
            </ul>
        <?php endif; ?>
        <?php $i++; ?>
    <?php endforeach; ?>
</section>