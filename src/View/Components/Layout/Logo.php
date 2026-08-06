<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Logo extends Component
{
    public function __construct(
        public ?string $text = null,
        public string $href = '/',
        public ?string $icon = null,
    ) {
        parent::__construct('components.layout.logo');
    }
}
