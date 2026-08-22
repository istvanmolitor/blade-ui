<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Typography;

use Molitor\BladeUi\View\Components\Component;

class UnorderedList extends Component
{
    /**
     * @param  array<int, string>  $items
     */
    public function __construct(
        public array $items = [],
    ) {
        parent::__construct('components.typography.unordered-list');
    }
}
