<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;
use Molitor\Menu\Services\MenuItem;

class MainMenu extends Component
{
    /** @var MenuItem[] */
    public array $items;

    public function __construct(
        public string $name = 'main'
    ) {
        parent::__construct('components.layout.main-menu');

        $this->items = menu($this->name);
    }
}
