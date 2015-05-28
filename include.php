<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('citfact.pjax', array(
    'Citfact\Pjax\Pjax' => 'lib/Citfact/Pjax/Pjax.php',
    'Citfact\Pjax\PjaxEvent' => 'lib/Citfact/Pjax/PjaxEvent.php',
    'Citfact\Pjax\PjaxInterface' => 'lib/Citfact/Pjax/PjaxInterface.php',
));
