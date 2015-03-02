<?php
define('DS', DIRECTORY_SEPARATOR);

$filename = __DIR__ . DS . 'src' . DS . 'cassandra' . DS . 'Cassandra.php';
$contents = file_get_contents($filename);

if(preg_match_all('~\\\cassandra\\\([a-z][a-z0-9]+)~i', $contents, $matches))
{
  function sortlen($a, $b)
  {
    return strlen($b) - strlen($a);
  }

  //$use = [];

  $classes = array_unique($matches[1]);
  usort($classes, 'sortlen');
  foreach($classes as $class)
  {
    $contents = str_replace(' \\cassandra\\' . $class, ' ' . $class, $contents);
    $contents = str_replace('(\\cassandra\\' . $class, '(' . $class, $contents);
  }

  file_put_contents($filename, $contents);
}

echo 'Refactor done' . PHP_EOL . PHP_EOL;
