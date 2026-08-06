<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class SectionHeader extends Component
{
    public function __construct(
        public ?string $eyebrow = null,
        public ?string $description = null,
        public string $align = 'left',
    ) {
        parent::__construct('components.layout.section-header');
    }
}
