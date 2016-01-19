<?php
namespace SizzlePHP\tests;

use \SizzlePHP\Token;

/**
 * This class tests Token class.
 *
 * ./vendor/bin/phpunit --bootstrap src/tests/autoload.php src/tests/TokenTest
 */
class TokenTest
extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the __construct method.
     */
    public function testConstructor()
    {
        // no ID
        $token = new Token();
        $this->assertEquals('SizzlePHP\Token', get_class($token));
        $this->assertFalse(isset($token->tokenId));
        $this->assertFalse(isset($token->endpoint));

        //with ID
        $tokenID = rand();
        $token = new Token($tokenID);
        $this->assertTrue(isset($token->tokenId));
        $this->assertFalse(isset($token->endpoint));
        $this->assertEquals($tokenID, $token->tokenId);
    }

    /**
     * Tests the create method.
     */
    public function testCreate()
    {
        $token = new Token();
        $this->assertTrue(method_exists($token, 'create'));
    }

    /**
     * Tests the delete method failing.
     */
    public function testDeleteFail()
    {
        $token = new Token();
        $this->assertTrue(method_exists($token, 'delete'));
        $this->assertFalse($token->delete());
    }

    /**
     * Tests the delete method success with a mocked API call.
     *
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testDeleteSuccess()
    {
        $tokenId = rand();
        $mock = \Mockery::mock('overload:\\SizzlePHP\\ApiCall');
        $this->assertEquals('SizzlePHP\ApiCall', get_class($mock));
        $mock->shouldReceive('delete')
             ->with('v1/token/delete', array('tokenId'=>$tokenId))
             ->andReturn(true);
        $token = new Token($tokenId);
        $this->assertTrue($token->delete());
    }

    /**
     * Tests the update method.
     */
    public function testUpdate()
    {
        $token = new Token();
        $this->assertTrue(method_exists($token, 'update'));
    }
}
