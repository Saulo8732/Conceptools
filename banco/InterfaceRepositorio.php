<?php

/**
 * Created by PhpStorm.
 * User: Saulo
 * Date: 2017-10-18
 * Time: 11:42 PM
 */
interface InterfaceRepositorio
{
    /**
     * @param $querry <- String
     * @return boolean
     */
    public function create($querry);

    /**
     * @param $querry <- String
     * @return boolean
     */
    public function insert($querry);

    /**
     * @param $querry <- String
     * @return boolean
     */
    public function delete($querry);

    /**
     * @param $querry <- String
     * @return mixed
     */
    public function select($querry);
}