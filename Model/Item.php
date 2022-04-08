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
     * @param mixed $label
     * @param string $url
     */
    public function __construct(
        private mixed $label = '',
        private string $url = '/'
    ) {
    }

    /**
     * @return mixed
     */
    public function getLabel(): mixed
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
