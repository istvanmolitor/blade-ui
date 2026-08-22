<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Layout extends Component
{
    public function __construct(
        public string $title = '',
    ) {
        parent::__construct('components.layout.layout');
    }
}
