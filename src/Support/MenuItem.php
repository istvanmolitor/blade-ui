<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Support;

final class MenuItem
{
    /**
     * @param  array<int, self>  $children
     */
    public function __construct(
        private readonly string $label,
        private readonly string $url = '#',
        private readonly bool $active = false,
        private readonly array $children = [],
        private readonly ?string $icon = null,
    ) {}

    /**
     * @param  array{label: string, url?: string, active?: bool, children?: array<int, array<string, mixed>>, icon?: string|null}  $item
     */
    public static function fromArray(array $item): self
    {
        return new self(
            label: $item['label'],
            url: $item['url'] ?? '#',
            active: $item['active'] ?? false,
            children: self::collectionFromArray($item['children'] ?? []),
            icon: $item['icon'] ?? null,
        );
    }

    /**
     * @param  array<int, array<string, mixed>>  $items
     * @return array<int, self>
     */
    public static function collectionFromArray(array $items): array
    {
        return array_map(self::fromArray(...), $items);
    }

    /**
     * @return array<int, self>
     */
    public static function collectionFromConfig(string $menu = 'main'): array
    {
        return self::collectionFromArray(config("blade-ui.menus.{$menu}", []));
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @return array<int, self>
     */
    public function getMenuItems(): array
    {
        return $this->children;
    }

    public function hasChildren(): bool
    {
        return $this->children !== [];
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }
}
