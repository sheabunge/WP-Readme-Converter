<?php

if( ! isset( $_REQUEST['file'] ) || ! file_exists( $_REQUEST['file'] ) ) exit;

// grab the contents of the file
$readme = file_get_contents( $_FILES['file']['tmp_name'] );

// convert headings
$readme = preg_replace( "|^=([^=]+)=*?\s*?\n|im", '###$1' . "\n", $readme );
$readme = preg_replace( "|^==([^=]+)=*?\s*?\n|im", '##$1' . "\n", $readme );
$readme = preg_replace( "|^===([^=]+)=*?\s*?\n|im", '#$1' . "\n", $readme );

// parse contributors, donate link, etc.
$readme = preg_replace( "|^([^:\n#]+): (.+)$|im", "* $1: $2  ", $readme );

header('Content-disposition: attachment; filename=readme.md' );
header('Content-type: text/plain');

echo $readme;