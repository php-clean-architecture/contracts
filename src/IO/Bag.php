<?php

namespace Cleanliness\Contracts\IO;

/**
 * The IO-bag contract.
 *
 * @package \Cleanliness\Contracts\IO
 */
interface Bag
{
    /**
     * Get all items from the bag.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Determin if the bag contains given item.
     *
     * @param  string  $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Get item form the bag.
     *
     * @param  string  $name
     * @return mixed
     */
    public function get(string $name);

    /**
     * Get item from the bag via a dynamic property.
     *
     * @param  string  $name
     * @return mixed
     */
    public function __get(string $name);
}
