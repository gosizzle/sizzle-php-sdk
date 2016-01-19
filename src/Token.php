<?php
namespace SizzlePHP;

/**
 * This class is for creating, updating & deleting tokens.
 */
class Token
extends \PHPUnit_Framework_TestCase
{
    protected $endpoint;
    protected $apiCall;
    protected $tokenId;

    /**
     * Constructs the class, setting class variables
     */
    public function __construct($tokenId = null)
    {
        $this->endpoint = 'v1/token';
        $this->apiCall = new ApiCall();
        $this->tokenId = $tokenId;
    }

    /**
     * Creates a token.
     *
     * @param array $variables - associative array of variables to create token with
     *
     * @return boolean - success of creation
     */
    public function create($variables)
    {
        //
    }

    /**
     * Deletes a token.
     *
     * @return boolean - success of deletion
     */
    public function delete()
    {
        $return = false;
        if (isset($this->tokenId)) {
            $return = $this->apiCall->delete(
                $this->endpoint.'/delete',
                array('tokenId'=>$this->tokenId)
            );
        }
        return $return;
    }

    /**
     * Updates a token.
     *
     * @param array $variables - the variables to update
     *
     * @return boolean - success of update
     */
    public function update($variables)
    {
        //
    }

    /**
     * Accesses the classes tokenId property
     *
     * @param string $property - the object property requested
     *
     * @return string - API response (status code and string)
     */
    public function __get($property)
    {
        if ('tokenId' == $property) {
          return $this->tokenId;
        }
    }

    /**
     * This function checks if a protected property is set
     *
     * @param string $property - the class property to check
     *
     * @return bool - if the property is set
     */
    public function __isset($property)
    {
        if ('tokenId' == $property) {
            return isset($this->$property);
        }
        return false;
    }
}
