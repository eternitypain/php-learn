<?php
function createHtmlElement($tag, $content) {
    echo "<$tag>$content</$tag>";
}

createHtmlElement('h1', 'Hello, World!');
createHtmlElement('p', 'This is a paragraph.');
?>
