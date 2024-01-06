<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class SidebarNavigation extends Component
{

    public Collection $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = collect([
            [
                'url' => route('page-home'),
                'text' => 'Home'
            ],
            [
                'url' => route('page-about'),
                'text' => 'About'
            ],
            [
                'url' => route('page-login'),
                'text' => 'Login'
            ],
            [
                'url' => route('page-users'),
                'text' => 'Users'
            ],
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-navigation');
    }
}
