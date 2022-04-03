<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Model;

/**
 * Class Breadcrumb
 * @package PiWeb\PiBreadcrumb\Model
 */
class Breadcrumb
{
    /**
     * @var array
     */
    private array $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param $label
     * @param string $url
     */
    public function addItem($label, string $url = ''): void
    {
        $this->items[] = new Item($label, $url);
    }
}
