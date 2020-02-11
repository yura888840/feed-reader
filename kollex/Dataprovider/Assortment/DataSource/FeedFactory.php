<?php

namespace kollex\Dataprovider\Assortment\DataSource;

/**
 * Class FeedFactory
 * @package kollex\Dataprovider\Assortment\DataSource
 */
class FeedFactory
{
    public static function getReader($type) : IReader
    {
        $class = sprintf("kollex\Dataprovider\Assortment\DataSource\%sFeed\Reader", ucfirst($type));
        if (!class_exists($class)) {
            throw new \Exception('Reader doesn\' exists');
        }

        return new $class;
    }

    public static function getMapper($type) : IMapper
    {
        $class = sprintf("kollex\Dataprovider\Assortment\DataSource\%sFeed\Mapper", ucfirst($type));
        if (!class_exists($class)) {
            throw new \Exception('Mapper doesn\' exists');
        }

        return new $class;
    }
}