<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Table;

use Molitor\BladeUi\View\Components\Component;

class Row extends Component
{
    public function __construct()
    {
        parent::__construct('components.table.row');
    }
}
