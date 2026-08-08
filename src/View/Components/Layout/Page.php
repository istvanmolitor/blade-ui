<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Page extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public array $menuItems = [],
        public array $footerItems = [],
    ) {
        parent::__construct('components.layout.page');

        $this->title ??= config('blade-ui.title', config('app.name'));
    }
}
