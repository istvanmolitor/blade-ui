<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\List;

use Molitor\BladeUi\View\Components\Component;

class ChecklistItem extends Component
{
    public function __construct(
        public ?string $description = null,
        public string $icon = 'check-circle-2',
    ) {
        parent::__construct('components.list.checklist-item');
    }
}
