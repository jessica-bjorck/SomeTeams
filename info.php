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
                <h1> <?= $key; ?> </h1>
                <img class="infoImage" src="<?= $teams[$key]['logo_uefa'] ?>" alt="uefa logo">
            </div>
            <?php foreach ($value as $subKey => $subValue): ?>
                <?php if (in_array($subKey, ['league', 'uefa-coefficient-ranking', 'league-position', 'city']) && $subValue != Null): ?>
                    <ul class='teamInfoList'>
                        <li> <strong> <?= $subKey; ?> </strong> <?= $subValue; ?> </li>
                    </ul>
                <?php else: continue; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php $i++; ?>
    <?php endforeach; ?>
</section>