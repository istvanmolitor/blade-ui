<?php

namespace Molitor\BladeUi\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component as ViewComponent;

class Component extends ViewComponent
{
    public function __construct(
        protected string $view = ''
    ) {}

    public function render(): View
    {
        return template("blade-ui::{$this->view}", $this->data());
    }
}
