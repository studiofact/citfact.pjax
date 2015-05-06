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

interface PjaxInterface
{
    /**
     * @param string $buffer
     * @return string|bool
     */
    public function getResponseContent($buffer);

    /**
     * @return bool
     */
    public function isPjaxRequest();

    /**
     * @return string
     */
    public function getPjaxContainer();
}