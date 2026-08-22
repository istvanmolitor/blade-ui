<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components;

class Badge extends Component
{
    public function __construct(
        public string $variant = 'gray',
        public ?string $icon = null,
    ) {
        parent::__construct('components.badge');
    }
}
