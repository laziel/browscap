<?php
/**
 * Created by PhpStorm.
 * User: Thomas Müller2
 * Date: 29.06.14
 * Time: 00:13
 */

namespace Browscap\Filter;


interface FilterInterface
{
    /**
     * returns the Type of the filter
     *
     * @return string
     */
    public function getType();
}