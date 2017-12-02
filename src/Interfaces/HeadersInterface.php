<?php

namespace AEngine\Orchid\Message\Interfaces;

use AEngine\Orchid\Interfaces\CollectionInterface;

/**
 * Headers Interface
 */
interface HeadersInterface extends CollectionInterface
{
    public function add($key, $value);

    public function normalizeKey($key);
}
