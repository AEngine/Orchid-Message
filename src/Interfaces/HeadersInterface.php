<?php

namespace AEngine\Orchid\Message\Interfaces;

/**
 * Headers Interface
 */
interface HeadersInterface extends CollectionInterface
{
    public function add($key, $value);

    public function normalizeKey($key);
}
