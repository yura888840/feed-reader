<?php


namespace FeedPusher\Dataprovider\Input;

interface DataProvider
{
    /**
     * @return InputItem[]
     */
    public function getProducts() : array;
}
