<?php

namespace PiWeb\PiBreadcrumb\Model;

class Breadcrumb
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem($label, $url = ''): void
    {
        $this->items[] = new Item($label, $url);
    }
}
