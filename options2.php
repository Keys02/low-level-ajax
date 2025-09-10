<?php
header("Content-type: text/xml");
$options = ['black', 'white', 'orange'];

$template = <<<XML
    <?xml version="1.0"?>;
XML;

foreach ($options as $value) {
    $template += <<<XML
        <option>$value</option>;
    XML;
}