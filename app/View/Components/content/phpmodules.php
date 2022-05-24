<?php

namespace App\View\Components\content;

use Illuminate\View\Component;

class phpmodules extends Component
{
    /**
     * Array stacks.
     * 
     * @var array
     */
    public $arr;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $json = json_decode(file_get_contents(__DIR__ . '/data/phpmodules.json'), true);
        $j = -1;
        for($i = 0; $i < count($json); $i++) {
            if($i % 15 === 0) {
                $j++;
            }
            $this->arr[$j][] = $json[$i];
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.phpmodules', $this->arr);
    }
}
