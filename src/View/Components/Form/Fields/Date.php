<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Form\Fields;

use Molitor\BladeUi\View\Components\Component;

class Date extends Component
{
    public function __construct()
    {
        parent::__construct('components.form.fields.date');
    }
}
