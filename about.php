<?php

$facts = [
    'name' => "Jessica Björck",
    'ålder' => 32,
    'bosatt i' => "Göteborg",
    'utbildning' => [
        "Dans",
        "Konst",
        "Webbutvecklare (pågående)"
    ],
    'intressen' => [
        "Doctor Who",
        "pussla",
        "lösa soduko",
        "Stormlight Archive (Cosmere universe)",
        "Slay the Spire",
        "djur (verkliga och mjukisbaserade)"
    ],
];

require_once __DIR__ . '/head.php';
require_once __DIR__ . '/footer.php';
?>

<h1>About</h1>

<p>Introtext till sidan</p>

<section>
    <figure>
        <img src="/images/profilbild.jpg" />
        <figcaption>Självporträtt</figcaption>
    </figure>
    <ul>
        <li>
            <h2></h2>
        </li>
        <li>
            <ul>
                <li></li>
            </ul>
        </li>
    </ul>
</section>