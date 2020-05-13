<?php

namespace LaravelViewComponents\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class RadioGroup extends Component
{
  /**
   * The input id attribute.
   *
   * @var string
   */
  public $id;
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
   * @param  string  $checked
   *
   * @return void
   */
  public function __construct($label = null)
  {
      $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
      $this->label = $label;
      $this->inline = $inline;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
      return view('components::form.radio-group');
  }
}
