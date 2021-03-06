<?php

namespace LaravelViewComponents\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Text extends Component
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
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $placeholder
     *
     * @return void
     */
    public function __construct($name = "text", $label = "Text Input", $placeholder = "Enter Text")
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::form.text');
    }
}
