<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class MainMenu extends Component
{
    public function __construct(
        public array $items = []
    ) {
        parent::__construct('components.layout.main-menu');
    }
}
