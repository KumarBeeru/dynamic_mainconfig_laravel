<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $name;
    public $required;
    public $msg;

    /**
     * Input constructor.
     * @param $name
     * @param $type
     * @param $required
     * @param $message
     */
    public function __construct($name, $type, $msg)
    {

        $this->name = $name;
        $this->type = $type;
        $this->msg = $msg;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.form.input');
    }
}
