<?php

namespace LaravelViewComponents\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Checkbox extends Component
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
     * The input label.
     *
     * @var string
     */
    public $label;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     *
     * @return void
     */
    public function __construct($name = "checkbox", $label = null)
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::form.checkbox');
    }
}
