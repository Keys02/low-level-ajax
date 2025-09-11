<?php
    header("Content-type: application/xml");

    $scheme = filter_input(INPUT_GET, "scheme");
 
    if ($scheme == "1") {
        $options = ['red', 'blue', 'green']; 
    } else if ($scheme == "2") { 
        $options = ['black', 'cyan', 'orange'];
    }

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
