<?php

//file: main.php

require_once 'config.php';


try {
  echo config('site_name'), PHP_EOL;
  echo config('db.user'), PHP_EOL;
  echo config('db.host', 'localhost'), PHP_EOL;
  echo config('db.entrances.april.none'), PHP_EOL;
  echo config('db.entrances.june'), PHP_EOL;
} catch (Exception $e) {
  echo $e;
}
