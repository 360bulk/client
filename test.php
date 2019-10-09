<?php

require_once "./src/RandomQuotes.php";

// Because RandomQuotes is inside namespace 
$rq = new \RandomQuotes\RandomQuotes();

echo $rq->generate();
echo "\n";