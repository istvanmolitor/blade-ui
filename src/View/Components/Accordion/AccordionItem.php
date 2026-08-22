<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Accordion;

use Molitor\BladeUi\View\Components\Component;

class AccordionItem extends Component
{
    public function __construct(
        public string $title = '',
        public bool $open = false,
    ) {
        parent::__construct('components.accordion.accordion-item');
    }
}
