<?php

namespace kollex\Dataprovider\Assortment\DataSource;

interface IReader
{
    public function read() : \Iterator;
}