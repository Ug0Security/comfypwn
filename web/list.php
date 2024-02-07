<?php

$param1 = escapeshellarg($_GET['target']);

$output = shell_exec("proxychains -q bash test.sh list $param1 | tr -d '\"' | tr -d ' '| tr -d ','");
echo "$output";




?>
