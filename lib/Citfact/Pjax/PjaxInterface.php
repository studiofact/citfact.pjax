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
     * Set the last URL in case there were redirects
     *
     * @param string $url
     */
    public function setHeaderPjaxUrl($url = '');

    /**
     * Return content with pjax container
     *
     * @param string $buffer
     * @return string|bool
     */
    public function getResponseContent($buffer);

    /**
     * Check X-PJAX header
     *
     * @return bool
     */
    public function isPjaxRequest();

    /**
     * Return X-PJAX-CONTAINER header
     *
     * @return string
     */
    public function getPjaxContainer();
}