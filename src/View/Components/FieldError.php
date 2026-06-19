<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components;

class FieldError extends Component
{
    public function __construct(
        public string $name,
    ) {
        parent::__construct('components.field-error');
    }
}
