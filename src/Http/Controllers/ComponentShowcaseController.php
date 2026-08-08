<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\MessageBag;
use Molitor\BladeUi\Http\Controllers\Support\DemoMenuItem;

class ComponentShowcaseController extends Controller
{
    /**
     * @var array<string, string>
     */
    private const SECTIONS = [
        'blade-ui.showcase.alerts' => 'Alertek',
        'blade-ui.showcase.buttons' => 'Gombok',
        'blade-ui.showcase.feedback' => 'Visszajelzések',
        'blade-ui.showcase.form' => 'Űrlapok',
        'blade-ui.showcase.layout' => 'Layout',
        'blade-ui.showcase.list' => 'Listák',
        'blade-ui.showcase.typography' => 'Tipográfia',
    ];

    /**
     * @return array<string, string>
     */
    public static function sections(): array
    {
        return self::SECTIONS;
    }

    public function index(): View
    {
        return view('blade-ui::showcase.index', [
            'sections' => self::SECTIONS,
        ]);
    }

    public function alerts(): View
    {
        return view('blade-ui::showcase.alerts');
    }

    public function buttons(): View
    {
        return view('blade-ui::showcase.buttons');
    }

    public function feedback(): View
    {
        session()->flash('success', 'A művelet sikeresen végrehajtva.');

        // The feedback components read the globally shared "errors" variable
        // (normally set by Illuminate\View\Middleware\ShareErrorsFromSession),
        // so it must be shared, not just passed to the top-level view.
        ViewFacade::share('errors', new MessageBag([
            'email' => ['Az email mező kötelező.', 'Az email mező formátuma érvénytelen.'],
        ]));

        return view('blade-ui::showcase.feedback');
    }

    public function form(): View
    {
        return view('blade-ui::showcase.form', [
            'countries' => [
                'hu' => 'Magyarország',
                'de' => 'Németország',
                'at' => 'Ausztria',
            ],
        ]);
    }

    public function layout(): View
    {
        $menuItems = [
            new DemoMenuItem('Kezdőlap', '#', active: true),
            new DemoMenuItem('Szolgáltatások', '#'),
            new DemoMenuItem('Kapcsolat', '#'),
        ];

        return view('blade-ui::showcase.layout', [
            'menuItems' => $menuItems,
        ]);
    }

    public function list(): View
    {
        return view('blade-ui::showcase.list');
    }

    public function typography(): View
    {
        return view('blade-ui::showcase.typography');
    }
}
