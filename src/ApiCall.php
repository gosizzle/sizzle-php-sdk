<?php
namespace SizzlePHP;

/**
 * This class is for sending curl requests to the API.
 */
class ApiCall
extends \PHPUnit_Framework_TestCase
{
    protected $baseUrl;

    /**
     * Constructs the class
     */
    public function __construct()
    {
        $this->baseUrl = 'https://www.givetoken.com';
    }

    /**
     * Curls the API with a delete request.
     *
     * @param string $endpoint  - the endpoint to hit
     * @param array  $variables - the variables to send
     *
     * @return string - API response (status code and string)
     */
    public function delete($endpoint, $variables)
    {
        return $this->curl('DELETE', $endpoint, $variables);
    }

    /**
     * Curls the API with a get request.
     *
     * @param string $endpoint  - the endpoint to hit
     * @param array  $variables - the variables to send
     *
     * @return string - API response (status code and string)
     */
    public function get($endpoint, $variables)
    {
        return $this->curl('GET', $endpoint, $variables);
    }

    /**
     * Curls the API with a post request.
     *
     * @param string $endpoint  - the endpoint to hit
     * @param array  $variables - the variables to send
     *
     * @return string - API response (status code and string)
     */
    public function post($endpoint, $variables)
    {
        return $this->curl('POST', $endpoint, $variables);
    }

    /**
     * Curls the API with a put request.
     *
     * @param string $endpoint  - the endpoint to hit
     * @param array  $variables - the variables to send
     *
     * @return string - API response (status code and string)
     */
    public function put($endpoint, $variables)
    {
        return $this->curl('PUT', $endpoint, $variables);
    }

    /**
     * Curls the API with the desired request type.
     *
     * @param string $type      - the type of curl request (DELETE, GET, POST, PUT)
     * @param string $endpoint  - the endpoint to hit
     * @param array  $variables - the variables to send
     *
     * @return string - API response (status code and string)
     */
    protected function curl($type, $endpoint, $variables)
    {
        $url = $this->baseUrl . '/' . $endpoint;
        $handle = curl_init();
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_COOKIE, TEST_COOKIE);
        $fieldsString = "";
        foreach ($variables as $key=>$value) {
            $fieldsString .= $key.'='.$value.'&';
        }
        $fieldsString = rtrim($fieldsString, '&');
        curl_setopt($handle, CURLOPT_POSTFIELDS, $fieldsString);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_URL, $url);
        $response = curl_exec($handle);
        $statusCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        return array('statusCode'=>$statusCode, 'response'=>$response);
    }
}
