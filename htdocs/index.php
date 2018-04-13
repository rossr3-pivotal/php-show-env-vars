<?php

echo "Dumping environment variables<br>";

$keys = array_keys( $_ENV );


foreach ($keys as $key)
{
  echo $key ."=".$_ENV["$key"]."<br>";
}

echo "Done<br>";
?>
