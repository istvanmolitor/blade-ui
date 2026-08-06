<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class FeatureCard extends Component
{
    public function __construct(
        public ?string $icon = null,
        public string $title = '',
        public ?string $description = null,
        public ?string $href = null,
        public string $linkLabel = 'Bővebben',
        public string $variant = 'light',
    ) {
        parent::__construct('components.layout.feature-card');
    }
}
