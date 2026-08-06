<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Stat extends Component
{
    public function __construct(
        public string $value = '',
        public string $label = '',
        public string $align = 'left',
    ) {
        parent::__construct('components.layout.stat');
    }
}
