<?php

namespace LaravelViewComponents\Components\Form\Select;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Users extends Component
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
     * The selectable users.
     *
     * @var Collection
     */
    public $users;
    /**
     * Single or Multiple selectable items.
     *
     * @var bool
     */
    public $multiple;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     * @param  string   $label
     * @param  array    $users
     * @param  bool     $multiple
     *
     * @return void
     */
    public function __construct($name = "images", $label = "Select Users", Collection $users, $multiple = true)
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->label = $label;
        $this->users = $users;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::form.select.users');
    }
}
