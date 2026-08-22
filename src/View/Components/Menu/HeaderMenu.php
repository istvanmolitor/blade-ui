<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Menu;

use Molitor\BladeUi\Support\MenuItem;
use Molitor\BladeUi\View\Components\Component;

class HeaderMenu extends Component
{
    /**
     * @param  array<int, MenuItem>  $items
     */
    public function __construct(
        public array $items,
    ) {
        parent::__construct('components.menu.header-menu');
    }
}
