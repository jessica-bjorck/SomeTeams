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
        <li>
            <!-- nested list: containing team-info -->
            <ul class="teamItem">
                <li>
                    <!-- Heading: team name (retrieved from data.php)-->
                    <h2>
                    </h2>
                </li>
                <li>
                    <img src="" alt="team logo">
                </li>
            </ul>
        </li>
    </ul>
</section>