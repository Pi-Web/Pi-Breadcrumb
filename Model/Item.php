<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Model;

/**
 * Class Item
 * @package PiWeb\PiBreadcrumb\Model
 */
class Item
{
    /**
     * Item constructor.
     * @param string $label
     * @param string $url
     */
    public function __construct(
        private string $label = '',
        private string $url = '/'
    ) {
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
