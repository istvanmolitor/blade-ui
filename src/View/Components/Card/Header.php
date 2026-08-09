<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Card;

use Molitor\BladeUi\View\Components\Component;

class Header extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
    ) {
        parent::__construct('components.card.header');
    }
}
