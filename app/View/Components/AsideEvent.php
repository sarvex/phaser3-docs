<?php

namespace App\View\Components;

use App\Models\Docs\Event;
use Illuminate\View\Component;

class AsideEvent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $memberof;
    public $collection;

    public function __construct($memberof)
    {
        $this->memberof = $memberof;
        $this->collection = Event::all()->where('memberof', $memberof);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.docs.aside-event');
    }
}
