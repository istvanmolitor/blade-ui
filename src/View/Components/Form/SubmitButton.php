<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Form;

use Molitor\BladeUi\View\Components\Component;

class SubmitButton extends Component
{
    public function __construct()
    {
        parent::__construct('components.form.submit-button');
    }
}
