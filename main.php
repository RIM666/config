<?php

//file: main.php

require_once 'config.php';


try {
  echo config('site_name'), PHP_EOL;
  echo config('db.user', "localhost"), PHP_EOL;
  echo config('db.host', 'localhost'), PHP_EOL;
  echo config('db.entrances.april.none'), PHP_EOL;
} catch (Exception $e) {
  echo $e;
}
