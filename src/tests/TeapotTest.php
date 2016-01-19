<?php
namespace SizzlePHP\tests;

use \SizzlePHP\ApiCall;

/**
 * This class tests ApiCall class by accessing a public endpoint. During the
 * other unit tests, the class with be mocked rather than actually accessing the
 * Sizzle API.
 *
 * ./vendor/bin/phpunit --bootstrap src/tests/autoload.php src/tests/TeapotTest
 */
class TeapotTest
extends \PHPUnit_Framework_TestCase
{
    protected $endpoint;

    /**
     * Constructs the class
     */
    public function __construct()
    {
        $this->endpoint = 'teapot';
    }

    /**
     * Tests the delete method with the teapot endpoint.
     */
    public function testDelete()
    {
        // no vars
        $apiCall = new ApiCall();
        $result = $apiCall->delete($this->endpoint, array());
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);

        // with vars
        $apiCall = new ApiCall();
        $result = $apiCall->delete($this->endpoint, array('var1'=>1, 'var2'=>6));
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);
    }

    /**
     * Tests the get method with the teapot endpoint.
     */
    public function testGet()
    {
        // no vars
        $apiCall = new ApiCall();
        $result = $apiCall->get($this->endpoint, array());
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);

        // with vars
        $apiCall = new ApiCall();
        $result = $apiCall->get($this->endpoint, array('var1'=>1, 'var2'=>6));
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);
    }

    /**
     * Tests the post method with the teapot endpoint.
     */
    public function testPost()
    {
        // no vars
        $apiCall = new ApiCall();
        $result = $apiCall->post($this->endpoint, array());
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);

        // with vars
        $apiCall = new ApiCall();
        $result = $apiCall->post($this->endpoint, array('var1'=>1, 'var2'=>6));
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);
    }

    /**
     * Tests the put method with the teapot endpoint.
     */
    public function testPut()
    {
        // no vars
        $apiCall = new ApiCall();
        $result = $apiCall->put($this->endpoint, array());
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);

        // with vars
        $apiCall = new ApiCall();
        $result = $apiCall->put($this->endpoint, array('var1'=>1, 'var2'=>6));
        $this->assertEquals(418, $result['statusCode']);
        $this->assertEquals("I'm a teapot", $result['response']);
    }
}
