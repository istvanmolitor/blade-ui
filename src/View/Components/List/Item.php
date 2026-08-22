<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\List;

use Molitor\BladeUi\View\Components\Component;

class Item extends Component
{
    public function __construct(
        public ?string $icon = null,
        public ?string $description = null,
    ) {
        parent::__construct('components.list.item');
    }
}
