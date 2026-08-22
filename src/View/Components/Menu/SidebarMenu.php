<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Menu;

use Molitor\BladeUi\Support\MenuItem;
use Molitor\BladeUi\View\Components\Component;

class SidebarMenu extends Component
{
    /**
     * @param  array<int, MenuItem>|null  $items
     */
    public function __construct(
        public ?array $items = null,
    ) {
        parent::__construct('components.menu.sidebar-menu');
    }
}
