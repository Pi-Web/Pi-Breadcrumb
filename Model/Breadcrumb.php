<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Model;

/**
 * Class Breadcrumb
 * @package PiWeb\PiBreadcrumb\Model
 */
final class Breadcrumb
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($label, string $url = ''): void
    {
        $this->items[] = new Item($label, $url);
    }
}
