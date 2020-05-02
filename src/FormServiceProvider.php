<?php

namespace LaravelViewComponents;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class FormServiceProvider extends LaravelServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->loadViewComponentsAs('form', [
        Components\Form\Address::class,
        Components\Form\Checkbox::class,
        Components\Form\CheckboxGroup::class,
        Components\Form\Color::class,
        Components\Form\Date::class,
        Components\Form\Email::class,
        Components\Form\File::class,
        Components\Form\Number::class,
        Components\Form\Password::class,
        Components\Form\Phone::class,
        Components\Form\Radio::class,
        Components\Form\RadioGroup::class,
        Components\Form\Search::class,
        Components\Form\Select::class,
        Components\Form\Text::class,
        Components\Form\Toggle::class,
        Components\Form\Select\Images::class,
        Components\Form\Select\Tags::class,
        Components\Form\Select\Users::class,
    ]);

    $this->loadViewsFrom(__DIR__.'/Views', 'components');
    $this->publishes([
        __DIR__.'/Views' => resource_path('views/vendor/components'),
    ]);
  }
}
