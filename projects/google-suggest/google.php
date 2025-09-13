<?php
    $question = filter_input(INPUT_GET, "qu");

    $handle = fopen("https://www.google.com/complete/search?q=" . urlencode($question) . "w&cp=1&client=gws-wiz&xssi=t&gs_pcrt=undefined&hl=en-GH&authuser=0&psi=ODXEaJLQFJnV1sQP5df_mAc.1757689145235&dpr=1.25&pq=How%20to%20paste%20from%20clipboard%20in%20vim", "r");

    while (!feof($handle)) {
        $text = fgets($handle);
        echo $text;
    }

    fclose($handle);
