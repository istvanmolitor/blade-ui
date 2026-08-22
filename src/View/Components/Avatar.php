<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components;

class Avatar extends Component
{
    public function __construct(
        public ?string $name = null,
        public string $icon = 'user',
        public string $size = 'md',
    ) {
        parent::__construct('components.avatar');
    }

    public function initials(): ?string
    {
        if ($this->name === null || trim($this->name) === '') {
            return null;
        }

        return collect(explode(' ', trim($this->name)))
            ->filter()
            ->map(fn (string $part) => mb_strtoupper(mb_substr($part, 0, 1)))
            ->take(2)
            ->implode('');
    }
}
