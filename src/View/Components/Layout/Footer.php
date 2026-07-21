<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Footer extends Component
{
    public function __construct(
        public ?string $text = null
    ) {
        parent::__construct('components.layout.footer');
    }
}
