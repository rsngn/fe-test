<?php

namespace App\View\Components\content;

use Illuminate\View\Component;

class socialshare extends Component
{
    /**
     * Number of facebook share.
     * 
     * @var integer
     */
    public $facebook;

    /**
     * Number of twitter share.
     * 
     * @var integer
     */
    public $twitter;

    /**
     * Number of gplus share.
     * 
     * @var integer
     */
    public $gplus;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $arr = json_decode(file_get_contents(__DIR__ . '/data/shares.json'), true);
        $this->facebook = $arr['facebook'] ;
        $this->twitter = $arr['twitter'] ;
        $this->gplus = $arr['gplus'] ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content.socialshare',
            [ 'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'gplus' => $this->gplus ]
        );
    }
}
