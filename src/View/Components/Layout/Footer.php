<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Footer extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $logoIcon = null,
        public ?string $tagline = null,
        public string $menu = 'footer',
        public ?string $text = null,
    ) {
        parent::__construct('components.layout.footer');

        $this->title ??= config('blade-ui.title', config('app.name'));
        $this->logoIcon ??= config('blade-ui.logo');
    }
}
