<?php
function createHtmlElement($tag, $content, $count) {
    for ($i = 0; $i < $count; $i++) {
        echo "<$tag>$content</$tag>";
    }
}

createHtmlElement('h1', 'Hello, World!', 5);
createHtmlElement('p', 'This is a paragraph.', 2);
?>
