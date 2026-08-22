<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Table;

use Molitor\BladeUi\View\Components\Component;

class Cell extends Component
{
    public function __construct(
        public string $align = 'left',
    ) {
        parent::__construct('components.table.cell');
    }
}
