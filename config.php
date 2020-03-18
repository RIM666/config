<?php

//file: config.php

declare(strict_types=1);

function config(string $optionName, $defaultValue = null) {
  $data = include('settings.php');
  $length = strlen($optionName); // Длина строки $optionName
  $setting = null; // Переменная, хранящая выходные данные
  $keysCount = 0; // Число ключей в $optionName
  $keys [] = ''; // Массив, хранящий все ключи из $optionName
  $tempArray [] = ''; // Массив, хранящий вложенные массивы из $optionName
  // Заполнение массива $keys ключами из $optionName
  for ($i = 0; $i < $length; $i++) {
      if ($optionName[$i] !== '.') {
          $keys[$keysCount] .= $optionName[$i];
      } else {
          $keysCount++;
      }
  }

  // Присваивание значения настройки из $optionName к $setting
  if ($keysCount !== 0) {
      $tempArray[0] = $data[$keys[0]];
      for ($i = 1; $i <= $keysCount; $i++) {
          $tempArray[$i] = $tempArray[$i - 1][$keys[$i]];
      }
      $setting = $tempArray[$keysCount];
  } else {
      $setting = $data[$optionName];
  }

  /*  Проверка ввода $defaultValue
      и совпадения $optionName
      с названиями настроек */
  if ($setting === null) {
    if ($defaultValue !== null){
      return $defaultValue;
    } else {
      throw new Exception('Несуществующий параметр ' . $optionName);
    }
  }
  return $setting;
}
