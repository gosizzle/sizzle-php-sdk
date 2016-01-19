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
        $apiCall = new ApiCall();
        $this->assertEquals('SizzlePHP\ApiCall', get_class($apiCall));
        $this->assertFalse(isset($apiCall->baseUrl));
    }

    /**
     * Tests the delete method exists.
     */
    public function testDelete()
    {
        $apiCall = new ApiCall();
        $this->assertTrue(method_exists($apiCall, 'delete'));
    }

    /**
     * Tests the get method exists.
     */
    public function testGet()
    {
        $apiCall = new ApiCall();
        $this->assertTrue(method_exists($apiCall, 'get'));
    }

    /**
     * Tests the post method exists.
     */
    public function testPost()
    {
        $apiCall = new ApiCall();
        $this->assertTrue(method_exists($apiCall, 'post'));
    }

    /**
     * Tests the put method exists.
     */
    public function testPut()
    {
        $apiCall = new ApiCall();
        $this->assertTrue(method_exists($apiCall, 'put'));
    }
}
