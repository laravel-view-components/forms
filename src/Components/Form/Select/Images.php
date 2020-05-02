<?php

namespace LaravelViewComponents\Components\Form\Select;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Images extends Component
{
    /**
     * The input id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The input name attribute.
     *
     * @var string
     */
    public $name;
    /**
     * The input label element.
     *
     * @var string
     */
    public $label;
    /**
     * The selectable options.
     *
     * @var array
     */
    public $options;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     * @param  string   $label
     * @param  array    $options
     *
     * @return void
     */
    public function __construct($name = "images", $label = "Select Images", array $options = [])
    {
        $this->id = 'input-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::form.select.images');
    }
}
