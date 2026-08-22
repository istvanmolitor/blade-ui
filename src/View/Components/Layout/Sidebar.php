<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Sidebar extends Component
{
    public function __construct()
    {
        parent::__construct('components.layout.sidebar');
    }
}
