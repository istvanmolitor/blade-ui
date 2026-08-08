<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Buttons;

use Molitor\BladeUi\View\Components\Component;

class SecondaryButton extends Component
{
    public function __construct(
        public ?string $icon = null,
        public string $size = 'md',
        public ?string $href = null,
    ) {
        parent::__construct('components.buttons.secondary-button');
    }
}
