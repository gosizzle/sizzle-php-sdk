<?php
namespace SizzlePHP\tests;

use \SizzlePHP\ApiCall;

/**
 * This class tests ApiCall class is instantiable and has the expected methods.
 * See the TeapotTest for trivial tests of the methods.
 *
 * ./vendor/bin/phpunit --bootstrap src/tests/autoload.php src/tests/ApiCallTest
 */
class ApiCallTest
extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the __construct method.
     */
    public function testConstructor()
    {
        $ApiCall = new ApiCall();
        $this->assertEquals('SizzlePHP\ApiCall', get_class($ApiCall));
        $this->assertFalse(isset($ApiCall->baseUrl));
    }

    /**
     * Tests the delete method exists.
     */
    public function testDelete()
    {
        $ApiCall = new ApiCall();
        $this->assertTrue(method_exists($ApiCall, 'delete'));
    }

    /**
     * Tests the get method exists.
     */
    public function testGet()
    {
        $ApiCall = new ApiCall();
        $this->assertTrue(method_exists($ApiCall, 'get'));
    }

    /**
     * Tests the post method exists.
     */
    public function testPost()
    {
        $ApiCall = new ApiCall();
        $this->assertTrue(method_exists($ApiCall, 'post'));
    }

    /**
     * Tests the put method exists.
     */
    public function testPut()
    {
        $ApiCall = new ApiCall();
        $this->assertTrue(method_exists($ApiCall, 'put'));
    }
}
