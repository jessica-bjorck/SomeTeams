<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/aboutData.php';
?>
<article>
    <!-- div as a subheader, page-specific content -->
    <div class="subHeader">
        <h1>About</h1>
        <p>Introtext till sidan</p>

        <!-- container for image/portrait and a titel underneath -->
        <figure>
            <img src="/images/profilbild.jpg" />
            <figcaption>Självporträtt</figcaption>
        </figure>
    </div>

    <section class="factsContainer">

        <!-- List-foundation for iterating info from an array with about-facts to render on the page -->
        <ul class="factsList">
            <?php foreach ($facts as $key => $value): ?>
                <?php if (is_string($value) || is_int($value)): ?>
                    <li>
                        <?= $key . ' ' . $value; ?>
                    </li>
                <?php else: (is_array($value)); ?>
                    <li>
                        <?= $key . ' '; ?>
                    </li>
                    <li>
                        <?php foreach ($value as $nestedValues): ?>
                            <ul>
                                <li><?= $nestedValues; ?> </li>
                            </ul>
                        <?php endforeach; ?>
                    </li>
                <?php endif; ?>
        </ul>
    <?php endforeach; ?>
    </section>
</article>