<?php

declare(strict_types=1);

namespace Molitor\BladeUi\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\MessageBag;
use Molitor\BladeUi\Services\IconService;

class ComponentShowcaseController extends Controller
{
    /**
     * @return array<string, string>
     */
    public static function sections(): array
    {
        return config('blade-ui.showcase_sections', []);
    }

    public function index(): View
    {
        return view('blade-ui::pages.index', [
            'sections' => self::sections(),
        ]);
    }

    public function alerts(): View
    {
        return view('blade-ui::pages.alerts');
    }

    public function buttons(): View
    {
        return view('blade-ui::pages.buttons');
    }

    public function card(): View
    {
        return view('blade-ui::pages.card');
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

        return view('blade-ui::pages.feedback');
    }

    public function form(): View
    {
        return view('blade-ui::pages.form', [
            'countries' => [
                'hu' => 'Magyarország',
                'de' => 'Németország',
                'at' => 'Ausztria',
            ],
        ]);
    }

    public function icons(IconService $icons): View
    {
        return view('blade-ui::pages.icons', [
            'icons' => $icons->names(),
        ]);
    }

    public function icon(string $name, IconService $icons): View
    {
        abort_unless(in_array($name, $icons->names(), true), 404);

        return view('blade-ui::pages.icon-show', [
            'icon' => $name,
        ]);
    }

    public function layout(): View
    {
        return view('blade-ui::pages.layout');
    }

    public function list(): View
    {
        return view('blade-ui::pages.list');
    }

    public function table(): View
    {
        return view('blade-ui::pages.table');
    }

    public function typography(): View
    {
        return view('blade-ui::pages.typography');
    }
}
