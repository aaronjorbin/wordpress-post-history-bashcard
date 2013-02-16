<?php
date_default_timezone_set('America/New_York');
require "parser.php";
$file = $argv[1];;
$parser = new WXR_Parser();
$data = $parser->parse( $file );
$dataFile = fopen('datafile', 'w');
foreach($data["posts"] as $post){
    fwrite($dataFile,  '#'.strtotime($post["post_date"])."\n");
}
fclose($dataFile);

