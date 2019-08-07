<?php

namespace Thepixeldeveloper\Sitemap\Extensions;

use Thepixeldeveloper\Sitemap\Interfaces\DriverInterface;
use Thepixeldeveloper\Sitemap\Interfaces\VisitorInterface;

/**
 * Class Mobile
 *
 * @package Thepixeldeveloper\Sitemap\Subelements
 */
class Mobile implements VisitorInterface
{
    protected $type;

    public function __construct($type = null)
    {
        if ($type) $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function accept(DriverInterface $driver)
    {
        $driver->visitMobileExtension($this);
    }
}
