PJAX для 1C-Bitrix
=========

Перед выводом ответа HTTP, проверяет заголовок X-PJAX, если определен, то вернет запрашиваемый элемент, 
определенный в заголовке X-PJAX-Container.

Для более подробной информации, посетите страницу с документацией [jquery.pjax.js](https://github.com/defunkt/jquery-pjax)

## Требования:

 - PHP версия >= 5.3.3
 - Bitrix версия >= 14

## Установка

Используйте composer для управления зависимостями и установкой модуля

``` bash
php composer.phar require citfact/pjax
```

Подключите composer автолоадер 
``` php
// init.php

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
```

Далее в административной панели в разделе "Marketplace > Установленные решения" устанавливаем модуль.
