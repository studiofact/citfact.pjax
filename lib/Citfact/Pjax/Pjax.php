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
use Symfony\Component\DomCrawler\Crawler;

class Pjax implements PjaxInterface
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @inheritdoc
     */
    public function getResponseContent($buffer)
    {
        $crawler = new Crawler($buffer);
        $responseTitle = $crawler->filter('head > title');
        $responseContainer = $crawler->filter($this->getPjaxContainer());

        if ($responseContainer->count()) {
            if ($responseTitle->count()) {
                $content = sprintf('<title>%s</title>', $responseTitle->html());
            }

            return sprintf('%s%s', $content ?: '', $responseContainer->html());
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function isPjaxRequest()
    {
        return (bool)$this->getServer()->get('HTTP_X_PJAX');
    }

    /**
     * @inheritdoc
     */
    public function getPjaxContainer()
    {
        return $this->getServer()->get('HTTP_X_PJAX_CONTAINER');
    }

    /**
     * @return Bitrix\Main\Server
     */
    public function getServer()
    {
        return $this->app->getContext()->getServer();
    }
}