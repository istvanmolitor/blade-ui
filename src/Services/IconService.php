<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Services;

use Composer\InstalledVersions;

class IconService
{
    /**
     * @var array<int, string>|null
     */
    private static ?array $names = null;

    /**
     * All available `<x-ui::layout.icon name="...">` icon names (Lucide icon set).
     *
     * @return array<int, string>
     */
    public function names(): array
    {
        if (self::$names !== null) {
            return self::$names;
        }

        $path = $this->iconsPath();

        if ($path === null || ! is_dir($path)) {
            return self::$names = [];
        }

        $files = glob($path.'/*.svg') ?: [];

        sort($files);

        return self::$names = array_map(
            fn (string $file) => pathinfo($file, PATHINFO_FILENAME),
            $files,
        );
    }

    private function iconsPath(): ?string
    {
        if (! class_exists(InstalledVersions::class)) {
            return null;
        }

        $installPath = InstalledVersions::getInstallPath('mallardduck/blade-lucide-icons');

        if ($installPath === null) {
            return null;
        }

        return rtrim($installPath, '/').'/resources/svg/icons';
    }
}
