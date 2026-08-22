<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Menu;

use Molitor\BladeUi\Support\MenuItem;
use Molitor\BladeUi\View\Components\Component;

class MobileMenuItems extends Component
{
    /**
     * @param  array<int, MenuItem>  $items
     */
    public function __construct(
        public array $items,
        public int $depth = 0,
    ) {
        parent::__construct('components.menu.mobile-menu-items');
    }
}
