<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Services;

class LayoutService
{
    /**
     * @var array<string, array{name: string, template: string}>
     */
    protected array $configs = [
        'container' => [
            'name' => 'Konténer',
            'template' => 'blade-ui::layouts.container',
        ],
        'centered' => [
            'name' => 'Középen',
            'template' => 'blade-ui::layouts.centered',
        ],
        'full-width' => [
            'name' => 'Teljes szélesség',
            'template' => 'blade-ui::layouts.full-width',
        ],
        'left-sidebar' => [
            'name' => 'Bal oldalsáv',
            'template' => 'blade-ui::layouts.left-sidebar',
        ],
        'right-sidebar' => [
            'name' => 'Jobb oldalsáv',
            'template' => 'blade-ui::layouts.right-sidebar',
        ],
    ];

    public function getDefault(): string
    {
        return array_key_first($this->configs);
    }

    /**
     * @return array<int, string>
     */
    public function getLayoutNames(): array
    {
        return array_keys($this->configs);
    }

    /**
     * @return array<string, array{name: string, template: string}>
     */
    public function getLayouts(): array
    {
        return $this->configs;
    }

    public function isValidLayout(string $layoutName): bool
    {
        return array_key_exists($layoutName, $this->configs);
    }

    /**
     * Get the template for a specific layout.
     */
    public function getLayoutTemplate(?string $layoutName = null): string
    {
        if ($layoutName === null || ! $this->isValidLayout($layoutName)) {
            $layoutName = $this->getDefault();
        }

        return $this->configs[$layoutName]['template'];
    }
}
