<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components;

class Rating extends Component
{
    public function __construct(
        public int $value = 0,
        public int $max = 5,
        public bool $showValue = false,
    ) {
        parent::__construct('components.rating');
    }
}
