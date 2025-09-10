<?php
    header("Content-type: application/xml");
    $options = ['red', 'blue', 'green']; 
    echo '<?xml version="1.0"?>';
    echo '<options>';

    foreach ($options as $value)
    {
        echo '<option>';
        echo $value;
        echo '</option>';
    }

    echo '</options>';
?>
