<?php

namespace App\View\Components\content;

use Illuminate\View\Component;

class techstack2 extends Component
{
    /**
     * Array stacks.
     * 
     * @var array
     */
    public $stacks;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->stacks = json_decode(file_get_contents(__DIR__ . '/data/techstack2.json'), true);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.techstack2', $this->stacks);
    }
}
