<?php

namespace LaravelViewComponents\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Toggle extends Component
{
    /**
     * The input id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The input name.
     *
     * @var string
     */
    public $name;
    /**
     * Whether or not the toggle is checked.
     *
     * @var bool
     */
    public $checked;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  bool    $checked
     *
     * @return void
     */
    public function __construct($name = "toggle", $checked = false)
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::form.toggle');
    }
}
