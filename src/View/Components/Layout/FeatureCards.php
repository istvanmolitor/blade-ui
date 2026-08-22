<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class FeatureCards extends Component
{
    public function __construct(
        public string $variant = 'light',
    ) {
        parent::__construct('components.layout.feature-cards');
    }
}
