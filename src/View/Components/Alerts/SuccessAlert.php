<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Alerts;

use Molitor\BladeUi\View\Components\Component;

class SuccessAlert extends Component
{
    public function __construct(
        public ?string $icon = 'check-circle',
    ) {
        parent::__construct('components.alerts.success-alert');
    }
}
