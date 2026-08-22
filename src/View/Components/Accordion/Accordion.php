<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Accordion;

use Molitor\BladeUi\View\Components\Component;

class Accordion extends Component
{
    public function __construct()
    {
        parent::__construct('components.accordion.accordion');
    }
}
