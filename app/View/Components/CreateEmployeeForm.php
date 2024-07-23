<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateEmployeeForm extends Component
{
    public $campuses, $statuses;
    /**
     * Create a new component instance.
     */
    public function __construct($campuses, $statuses)
    {
        $this->campuses = $campuses;
        $this->statuses = $statuses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.create-employee-form');
    }
}
