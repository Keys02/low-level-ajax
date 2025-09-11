<?php
    header("Content-type: application/xml");

    $options = ['red', 'blue', 'green']; 

    /*
    echo '<?xml version="1.0"?>';
    echo '<options>';

    foreach ($options as $value)
    {
        echo '<option>';
        echo $value;
        echo '</option>';
    }

    echo '</options>';
    */

    $template = <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <options>
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

