<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Icon extends Component
{
    public function __construct(
        public string $name = ''
    ) {
        parent::__construct('components.layout.icon');
    }
}
