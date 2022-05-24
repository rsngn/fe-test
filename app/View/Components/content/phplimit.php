<?php

namespace App\View\Components\content;

use Illuminate\View\Component;

class phplimit extends Component
{
    /**
     * Array limits.
     * 
     * @var array
     */
    public $limits;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $arr = json_decode(file_get_contents(__DIR__ . '/data/limits.json'), true);
        $length = count($arr);

        if ($length>1) {
            $half = ceil($length / 2) - 1;

            for($i = 0; $i < $length; $i++) {
                if ($i <= $half ) {
                    $this->limits[0][] = $arr[$i];
                } else {
                    $this->limits[1][] = $arr[$i];
                }
            }

        } else {
            $this->limits[1] = $arr;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.phplimit', $this->limits);
    }
}
