<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Typography;

use Molitor\BladeUi\View\Components\Component;

class Code extends Component
{
    public function __construct(
        public string $code = '',
    ) {
        parent::__construct('components.typography.code');
    }
}
