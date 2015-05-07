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

class PjaxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Pjax
     */
    protected $pjax = null;

    protected function setUp()
    {
        $this->pjax = new Pjax(Application::getInstance());
    }

    public function testIsPjaxRequest()
    {
        $this->pjax->getServer()->set(array('HTTP_X_PJAX' => true));
        $this->assertTrue($this->pjax->isPjaxRequest());
    }

    public function testGetPjaxContainer()
    {
        $this->pjax->getServer()->set(array('HTTP_X_PJAX_CONTAINER' => '#test'));
        $this->assertEquals('#test', $this->pjax->getPjaxContainer());
    }

    public function testGetResponseContent()
    {
        $this->pjax->getServer()->set(array('HTTP_X_PJAX_CONTAINER' => '#test'));

        $response = '<div id="test">content</div>';
        $this->assertEquals('content', $this->pjax->getResponseContent($response));

        $response = '<head><title>Test</title></head><div id="test">content</div>';
        $this->assertEquals('<title>Test</title>content', $this->pjax->getResponseContent($response));

        $response = '<div id="test-fake">content</div>';
        $this->assertFalse($this->pjax->getResponseContent($response));
    }
}