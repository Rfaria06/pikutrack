<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * Because of this class, the guest layout can be used like this:
     * <x-guest-layout>
     *
     * Otherwise the layout would need to be accessed like this:
     * <x-components.layouts.guest>
     *
     * @return View the Guest Layout
     */
    public function render()
    {
        return view('components.layouts.guest');
    }
}
