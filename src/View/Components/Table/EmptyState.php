<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Table;

use Molitor\BladeUi\View\Components\Component;

class EmptyState extends Component
{
    public function __construct(
        public int $colspan = 1,
        public string $message = 'Nincs megjeleníthető adat.',
    ) {
        parent::__construct('components.table.empty-state');
    }
}
