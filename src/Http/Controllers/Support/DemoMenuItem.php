<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Http\Controllers\Support;

final class DemoMenuItem
{
    public function __construct(
        private readonly string $label,
        private readonly string $url = '#',
        private readonly bool $active = false,
    ) {}

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}
