<?php
$username = filter_input(INPUT_GET, "username");

if ($username == "steve" || $username == "Steve") { 
    echo "taken";
} else {
    echo "ok";
}