<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\List;

use Molitor\BladeUi\View\Components\Component;

class DescriptionItem extends Component
{
    public function __construct(
        public string $term = '',
    ) {
        parent::__construct('components.list.description-item');
    }
}
