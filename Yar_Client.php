<?php

/**
 * Created by PhpStorm.
 * User: kphcdr
 * Date: 2018/8/14
 * Time: 下午9:10
 */
class Yar_Client
{

    /**
     * Yar_Client constructor.
     *
     * @param string $url
     *
     * @return Yar_Client
     */
    final public function __construct(string $url)
    {
        return $this;
    }


    /**
     * set option
     * @param number $name
     * @param        $value
     */
    public function setOpt(number $name,$value)
    {

    }

    /**
     *
     * @param string $method
     * @param array  $arguments
     *
     * @throws Yar_Client_Exception
     *
     * @return mixed
     */
    public function __call(string $method, array $arguments)
    {

    }

}