<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Services;

use Molitor\Setting\Enums\SettingFieldType;
use Molitor\Setting\Services\SettingForm;

class SiteSettingForm extends SettingForm
{
    public function getSlug(): string
    {
        return 'theme';
    }

    public function getLabel(): string
    {
        return 'Oldal adatai';
    }

    public function getFields(): array
    {
        return [
            'logo' => [
                'label' => 'Logó',
                'type' => SettingFieldType::Image,
            ],
            'footer_text' => [
                'label' => 'Lábléc szöveg',
                'type' => SettingFieldType::Textarea,
            ],
            'address' => [
                'label' => 'Cím',
                'type' => SettingFieldType::Text,
            ],
            'phone' => [
                'label' => 'Telefonszám',
                'type' => SettingFieldType::Text,
            ],
            'email' => [
                'label' => 'E-mail cím',
                'type' => SettingFieldType::Email,
            ],
        ];
    }
}
