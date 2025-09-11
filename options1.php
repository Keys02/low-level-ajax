<?php
    header("Content-type: application/xml");

    $options = ['red', 'blue', 'green']; 

    $template = <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <options>
    <option>Select color scheme</option>
    XML;

    foreach ($options as $value) {
        $template .= <<<XML
        <option>$value</option>
        XML;
    }

    $template .= <<<XML
    </options>
    XML;
    echo $template;
?>

