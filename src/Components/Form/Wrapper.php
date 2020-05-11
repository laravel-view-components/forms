<?php

namespace LaravelViewComponents\Components\Form;

use Admin;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Wrapper extends Component
{
    /**
     * The form id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The form method attribute.
     *
     * @var string
     */
    public $method;
    /**
     * The form action attribute.
     *
     * @var string
     */
    public $action;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $placeholder
     *
     * @return void
     */
    public function __construct($method = "POST", $action = "dashboard")
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($action);
        $this->method = $method;
        $this->action = Admin::route($action);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::form.wrapper');
    }
}
