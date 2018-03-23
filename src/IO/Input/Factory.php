<?php

namespace Cleanliness\Contracts\IO\Input;

/**
 * Input bag factory contract.
 *
 * @package \Cleanliness\Contracts\IO\Input
 */
interface Factory
{
    /**
     * Create an input bag of given type with given items.
     *
     * @param  string  $type
     * @param  array  $items
     * @return \Cleanliness\Contracts\IO\Input\InputBag
     */
    public function create(string $type, array $items): InputBag;
}
