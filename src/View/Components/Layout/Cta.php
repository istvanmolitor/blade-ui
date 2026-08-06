<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Cta extends Component
{
    public function __construct(
        public string $title = '',
        public ?string $description = null,
        public string $href = '#',
        public string $buttonLabel = '',
    ) {
        parent::__construct('components.layout.cta');
    }
}
