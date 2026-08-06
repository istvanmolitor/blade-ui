<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class ChecklistItem extends Component
{
    public function __construct(
        public ?string $title = null,
        public string $icon = 'check-circle-2',
    ) {
        parent::__construct('components.layout.checklist-item');
    }
}
