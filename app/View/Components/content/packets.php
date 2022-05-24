<?php

namespace App\View\Components\content;

use Illuminate\View\Component;

class packets extends Component
{
    /**
     * Array packets.
     * 
     * @var array
     */
    public $packets;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->packets = json_decode(file_get_contents(__DIR__ . '/data/packets.json'), true);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.packets', $this->packets);
    }
}
