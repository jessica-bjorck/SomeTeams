<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/aboutData.php';
?>
<article class="aboutArticle">
    <!-- div as a subheader, page-specific content -->
    <div class="subHeader">
        <h1>About</h1>
        <p>I have done this site:</p>
    </div>

    <section class="factsContainer">
        <!-- container for image/portrait and a image text underneath -->
        <figure>
            <img src="/images/profilbild.jpg" alt="Drawing, charcoal">
            <figcaption>Self portrait</figcaption>
        </figure>

        <!-- List-foundation: iterating info from array with about-facts to render on the page -->
        <ul class="factsList">
            <?php foreach ($facts as $key => $value): ?>
                <!-- If statement: check if value euqals string or integer (to rule out those with a value of an array)-->
                <?php if (is_string($value) || is_int($value)): ?>
                    <li>
                        <strong> <?= $key . ': ' ?> </strong> <?= $value; ?>
                    </li>
                <?php else: (is_array($value)); ?>
                    <li>
                        <strong> <?= $key . ': '; ?> </strong>
                    </li>
                    <li>
                        <!-- nested foreach - fetch nested array -->
                        <?php foreach ($value as $nestedValues): ?>
                            <ul class="nestedFactsList">
                                <li><?= $nestedValues; ?> </li>
                            </ul>
                        <?php endforeach; ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </section>
</article>