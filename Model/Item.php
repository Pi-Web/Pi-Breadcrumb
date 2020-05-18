<?php

namespace PiWeb\PiBreadcrumb\Model;

/**
 * Class Item
 * @package PiWeb\PiBreadcrumb\Model
 */
class Item
{
    /**
     * @var string
     */
    private string $label;

    /**
     * @var string
     */
    private string $url;

    /**
     * Item constructor.
     * @param string $label
     * @param string $url
     */
    public function __construct(string $label = '', string $url = '/')
    {
        $this->label = $label;
        $this->url = $url;
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
