<?php

namespace Cleanliness\Contracts\IO\Output;

/**
 * Output bag facory contract.
 *
 * @package \Cleanliness\Contracts\IO\Output
 */
interface Factory
{
    /**
     * Create an output bag of given type with given items.
     *
     * @param  string  $type
     * @param  array  $items
     * @return \Cleanliness\Contracts\IO\Output\OutputBag
     */
    public function create(string $type, array $items): OutputBag;
}
