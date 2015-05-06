PJAX для 1C-Bitrix
=========

Перед выводом ответа HTTP, проверяет заголовок X-PJAX, если определен, то вернет запрашиваемый элемент, 
определенный в заголовке X_PJAX_CONTAINER.

## Требования:

 - PHP версия >= 5.3.3
 - Bitrix версия >= 14

## Установка

Создайте или обновите ``composer.json`` файл и запустите ``php composer.phar update``
``` json
  {
      "require": {
          "citfact/pjax": "dev-master"
      }
  }
```

Подключите composer автолоадер 
``` php
// init.php

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
```