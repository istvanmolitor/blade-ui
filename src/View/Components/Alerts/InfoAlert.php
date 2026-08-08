<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Alerts;

use Molitor\BladeUi\View\Components\Component;

class InfoAlert extends Component
{
    public function __construct(
        public ?string $icon = 'info',
    ) {
        parent::__construct('components.alerts.info-alert');
    }
}
