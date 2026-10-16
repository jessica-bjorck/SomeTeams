<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/data.php';

?>
<article>
    <div class="subHeader">
        <h1>Some teams</h1>

        <p class='introParagraph'>
            <em> the last 16 teams competing for the title </em> <br />
            <strong> UEFA Women's Europa Cup 2026/2027 </strong>
        </p>
    </div>
    <!-- Container gathering all teams -->
    <section class="teamsContainer">
        <!-- Iterate and render home-page view of each team in list-->
        <?php $i = 1; ?>
        <?php foreach ($teams as $key => $value): ?>
            <ul class="teamItem">
                <li class="headingLi">
                    <!-- Heading: team name-->
                    <h2>
                        <?php echo $key; ?>
                    </h2>
                </li>
                <!-- Giving each iteration id and path to new side with more team-info -->
                <!-- Fetch logo from data -> img -->
                <li>
                    <a id="<?php echo $i; ?> " href=" <?php echo 'info.php?id=' . $i; ?> ">
                        <img src="<?= $teams[$key]['logo_uefa'] ?>" alt="uefa logo">
                    </a>
                </li>
            </ul>
            <?php $i++; ?>
        <?php endforeach; ?>
    </section>
</article>