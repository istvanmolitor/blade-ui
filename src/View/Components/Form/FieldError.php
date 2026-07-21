<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Form;

use Molitor\BladeUi\View\Components\Component;

class FieldError extends Component
{
    public function __construct(
        public string $name,
    ) {
        parent::__construct('components.form.field-error');
    }
}
