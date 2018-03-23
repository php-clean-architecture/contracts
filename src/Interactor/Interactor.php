<?php

namespace Cleanliness\Contracts\Interactor;

use Cleanliness\Contracts\IO\Input\InputBag;
use Cleanliness\Contracts\IO\Output\OutputBag;
use Cleanliness\Contracts\IO\Input\MetaDataBag;
use Cleanliness\Contracts\IO\Output\Factory as OutputFactory;

/**
 * Interactor contract.
 *
 * @package \Cleanliness\Contracts\Interactor
 */
interface Interactor
{
    /**
     * Handle the use case and return the output bag.
     *
     * @return \Cleanliness\Contracts\IO\OutputBag
     */
    public function handle(): OutputBag;

    /**
     * Set input bag.
     *
     * @param  \Cleanliness\Contracts\IO\InputBag  $inputBag
     * @return mixed
     */
    public function setInputBag(InputBag $inputBag);

    /**
     * Get input bag.
     *
     * @return \Cleanliness\Contracts\IO\InputBag
     */
    public function getInputBag(): InputBag;

    /**
     * Set output factory.
     *
     * @param  \Cleanliness\Contracts\IO\Output\Factory  $outputFactory
     * @return mixed
     */
    public function setOutputFactory(OutputFactory $outputFactory);

    /**
     * Get output factory.
     *
     * @return \Cleanliness\Contracts\IO\Output\Factory
     */
    public function getOutputFactory(): OutputFactory;

    /**
     * Get all items or the specified one from the input bag.
     *
     * @param  string  $name
     * @return array|mixed
     */
    public function input(string $name = null);

    /**
     * Shortcut to get meta-data from input bag.
     *
     * @return \Cleanliness\Contracts\IO\Input\MetaDataBag
     */
    public function meta(): MetaDataBag;

    /**
     * Shortcut to create an output bag of given type with given items or get
     * output factory instance.
     *
     * @return \Cleanliness\Contracts\IO\Output\Factory\|Cleanliness\Contracts\IO\Output\OutputBag
     */
    public function output(string $name = null, array $items = []);
}
