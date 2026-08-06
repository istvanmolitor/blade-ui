<?php

declare(strict_types=1);

namespace Molitor\BladeUi\View\Components\Layout;

use Molitor\BladeUi\View\Components\Component;

class Hero extends Component
{
    public function __construct(
        public ?string $eyebrow = null,
        public string $eyebrowIcon = 'sun',
        public string $title = '',
        public ?string $highlight = null,
        public ?string $description = null,
        public ?string $primaryHref = null,
        public ?string $primaryLabel = null,
        public ?string $secondaryHref = null,
        public ?string $secondaryLabel = null,
        public ?string $image = null,
        public string $imageAlt = '',
        public ?string $badgeIcon = null,
        public ?string $badgeLabel = null,
        public ?string $badgeValue = null,
    ) {
        parent::__construct('components.layout.hero');
    }
}
