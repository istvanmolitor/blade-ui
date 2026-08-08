<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Alerts;

use Molitor\BladeUi\View\Components\Component;

class ErrorAlert extends Component
{
    public function __construct(
        public ?string $icon = 'x-circle',
    ) {
        parent::__construct('components.alerts.error-alert');
    }
}
