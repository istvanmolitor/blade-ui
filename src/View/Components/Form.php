<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components;

class Form extends Component
{
    public function __construct(
        public string $action,
        public string $method = 'POST',
    ) {
        parent::__construct('components.form');
    }
}
