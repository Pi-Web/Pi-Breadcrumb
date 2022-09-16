<?php

declare(strict_types=1);

namespace PiWeb\PiBreadcrumb\Model;

final class Item
{
    public function __construct(
        private mixed $label = '',
        private string $url = '/'
    ) {
    }

    public function getLabel(): mixed
    {
        return $this->label;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
