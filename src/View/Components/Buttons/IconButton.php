<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Buttons;

use Molitor\BladeUi\View\Components\Component;

class IconButton extends Component
{
    public function __construct(
        public string $icon = '',
        public string $label = '',
        public string $size = 'md',
    ) {
        parent::__construct('components.buttons.icon-button');
    }
}
