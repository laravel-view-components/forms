<?php

namespace LaravelViewComponents\Components\Form\Select;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Tags extends Component
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
     * @param  string  $value
     * @param  string  $placeholder
     *
     * @return void
     */
    public function __construct($name = "tags", $label = "Select Tags Input")
    {
        $this->id = 'input-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
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
        return view('components::form.select.tags');
    }
}
