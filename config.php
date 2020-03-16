<?php

//file: config.php

declare(strict_types=1);

function config(string $optionName, $defaultValue = null) {
  $data = include('settings.php');
  $setting = null;
  if (strpos($optionName, '.') !== false) {
    $dotPos = strpos($optionName, '.');
     $setting = $data[substr($optionName, 0, $dotPos)][substr($optionName, $dotPos + 1)];
  }
  else {
     $setting = $data[$optionName];
  }
  if ($setting === null) {
    if ($defaultValue !== null){
      return $defaultValue;
    } else {
      throw new Exception('Несуществующий параметр');
    }
  }
  return $setting;
}
