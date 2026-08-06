<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Step extends Component
{
    public function __construct(
        public int|string $number = 1,
        public ?string $title = null,
        public ?string $description = null,
    ) {
        parent::__construct('components.layout.step');
    }
}
