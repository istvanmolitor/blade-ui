<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Feedback;

use Molitor\BladeUi\View\Components\Component;

class ErrorMessages extends Component
{
    public function __construct()
    {
        parent::__construct('components.feedback.error-messages');
    }
}
