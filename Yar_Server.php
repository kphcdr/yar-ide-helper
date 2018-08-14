<?php

/**
 * Created by PhpStorm.
 * User: kphcdr
 * Date: 2018/8/14
 * Time: 下午9:10
 */
class Yar_Server
{

    /**
     * Yar_Server constructor.
     *
     * @param $obj
     *
     * @return Yar_Server
     */
    public function __construct(stdClass $obj)
    {
        return $this;
    }

    /**
     * run Yar_Server
     *
     * @throws Yar_Server_Exception
     * @return bool
     */
    public function handle()
    {
        return true;
    }

}