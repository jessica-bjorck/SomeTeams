<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/data.php';
?>

<section>
    <?php $id = filter_input(INPUT_GET, 'id'); ?>
    <?php $i = 1; ?>
    <?php foreach ($teams as $key => $value): ?>
        <?php if ($i == $id): ?>
            <div class='subHeader'>
                <h1><?= $key; ?></h1>
                <img src='<?= $teams[$key]['logo_uefa'] ?>' alt="uefa logo" />
            </div>
            <ul class='teamInfo'>
                <li> <?php echo 'League' . ': ' . $teams[$key]['league']; ?> </li>
                <li> <?php echo 'Uefa Coefficient Ranking' . ': ' . $teams[$key]['uefa-coefficient-ranking']; ?> </li>
                <li> <?php echo 'League Position' . ': ' . $teams[$key]['league-position']; ?> </li>
                <li> <?php echo 'City: ' . $teams[$key]['city']; ?> </li>
            </ul>
        <?php endif; ?>
        <?php $i++; ?>
    <?php endforeach; ?>
</section>