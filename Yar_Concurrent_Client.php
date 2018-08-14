<?php

/**
 * Created by PhpStorm.
 * User: kphcdr
 * Date: 2018/8/14
 * Time: 下午9:29
 */
class Yar_Concurrent_Client
{
    /**
     * @param string $uri
     * @param string $method
     * @param array  $parameters
     * @param null   $callback
     *
     * @return int
     */
    public function call(string $uri , string $method , array $parameters,$callback=null)
    {
        return 1;
    }

    /**
     * Send all calls
     * @param $callback
     * @param $error_callback
     */
    public function loop($callback,$error_callback)
    {

    }

    /**
     * Clean all registered calls
     */
    public function reset()
    {

    }
}