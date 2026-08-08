<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Alerts;

use Molitor\BladeUi\View\Components\Component;

class WarningAlert extends Component
{
    public function __construct(
        public ?string $icon = 'alert-triangle',
    ) {
        parent::__construct('components.alerts.warning-alert');
    }
}
