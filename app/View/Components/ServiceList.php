<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceList extends Component
{

    public function __construct() {}

    public function render()
    {
        $services = $this->getServices();
        return view('components.service-list');
    }
    public function getServices()
    {
        return [];
    }
}
