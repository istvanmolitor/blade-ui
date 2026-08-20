@extends('blade-ui::layouts.demo')

@section('title', 'Gombok')
@section('description', 'components/buttons &mdash; a csomagban elérhető gombvariánsok.')

@section('content')
    <div class="space-y-10">
        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">Variánsok</p>
            <div class="flex flex-wrap items-center gap-3">
                <x-ui::buttons.primary-button>Primary</x-ui::buttons.primary-button>
                <x-ui::buttons.secondary-button>Secondary</x-ui::buttons.secondary-button>
                <x-ui::buttons.danger-button>Danger</x-ui::buttons.danger-button>
                <x-ui::buttons.success-button>Success</x-ui::buttons.success-button>
                <x-ui::buttons.outline-button>Outline</x-ui::buttons.outline-button>
                <x-ui::buttons.ghost-button>Ghost</x-ui::buttons.ghost-button>
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">Méretek (size prop)</p>
            <div class="flex flex-wrap items-center gap-3">
                <x-ui::buttons.primary-button size="sm">Small</x-ui::buttons.primary-button>
                <x-ui::buttons.primary-button size="md">Medium</x-ui::buttons.primary-button>
                <x-ui::buttons.primary-button size="lg">Large</x-ui::buttons.primary-button>
            </div>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">Ikonnal (icon prop) és linkként (href prop)</p>
            <div class="flex flex-wrap items-center gap-3">
                <x-ui::buttons.primary-button icon="plus">Új elem</x-ui::buttons.primary-button>
                <x-ui::buttons.outline-button icon="arrow-right" href="#">Tovább</x-ui::buttons.outline-button>
                <x-ui::buttons.icon-button icon="trash-2" label="Törlés" />
            </div>
        </div>
    </div>
@endsection
