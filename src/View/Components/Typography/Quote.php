<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Typography;

use Molitor\BladeUi\View\Components\Component;

class Quote extends Component
{
    public function __construct(
        public ?string $author = null,
    ) {
        parent::__construct('components.typography.quote');
    }
}
