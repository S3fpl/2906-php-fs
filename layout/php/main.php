
<?php
require 'links.php';
function generateLinks($links, $sectionTitle)
{
    echo '<div class="link-section">';
    echo '<h3>' . $sectionTitle . '</h3>';
    echo '<ul>';
    foreach ($links as $link) {
        echo '<li><a href="' . $link['url'] . '">' . $link['text'] . '</a></li>';
    }
    echo '</ul>';
    echo '</div>';
}

generateLinks($oldLinks, 'Old Links');
generateLinks($dumbLinks, 'Dumb Links');
generateLinks($challengeLinks, 'Challenge Links');
generateLinks($newLinks, 'New Links');
generateLinks($task, 'Tasks');
generateLinks($task2, 'Tasks 2');
generateLinks($task3, 'Tasks 3');
generateLinks($switch, 'Switch Cases');

?>