<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Pjax;

use Bitrix\Main\Application;

class PjaxEvent
{
    /**
     * @param string $buffer
     *
     * @return string
     */
    public static function endBufferContent(&$buffer)
    {
        $app = Application::getInstance();
        $pjax = new Pjax($app);

        if ($pjax->isPjaxRequest() && ($content = $pjax->getResponseContent($buffer)) !== false) {
            // Updating address bar with the last URL in case there were redirects
            $pjax->setHeaderPjaxUrl();
            // Set new content with pjax container
            $buffer = $content;
        }

        return $buffer;
    }
}
