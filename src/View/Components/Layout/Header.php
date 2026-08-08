<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Header extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $logoIcon = null,
        public array $items = [],
    ) {
        parent::__construct('components.layout.header');

        $this->title ??= config('blade-ui.title', config('app.name'));
        $this->logoIcon ??= config('blade-ui.logo');
    }
}
