<?php
date_default_timezone_set('America/New_York');
require "parser.php";
$file = $argv[1];;
$parser = new WXR_Parser();
$data = $parser->parse( $file );
foreach($data["posts"] as $post){
    echo strtotime($post["post_date"])."\n";
}
