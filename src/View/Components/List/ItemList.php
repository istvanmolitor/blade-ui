<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\List;

use Molitor\BladeUi\View\Components\Component;

class ItemList extends Component
{
    public function __construct()
    {
        parent::__construct('components.list.item-list');
    }
}
