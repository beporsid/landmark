<?php

namespace App\View\Components;

use App\Models\CaseModel;
use Illuminate\View\Component;

class LastCaseComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $items=CaseModel::query()
            ->limit(6)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('components.last-case-component' , compact('items'));
    }
}