# Laravel 7.x View Components

A Laravel View Components package built on the [Tabler UI Kit](https://tabler.io) - a free and open-source HTML Dashboard UI Kit built on Bootstrap.

## Goal
The goal of this package is to provide a list of easy to use form inputs as View Components in Blade to mimic the HTML package from LaravelCollective while also building on the Tabler UI Kit. All the form elements listed on the [Tabler Docs](https://preview-dev.tabler.io/docs/form-elements.html) should eventually be available here.

## Install

1. Install a fresh copy of [Laravel](https://laravel.com/docs/7.x/installation) 7.x or above.
2. Install this package via `composer require laravel-view-components/form`. Laravel 7.x will automatically discover this package. No need to register the service provider.
3. Install the Tabler UI Preset.
4. Run `npm install && npm run dev` to build the frontend

## Usage

If you are not familiar with Laravel 7.x View Components, please see the [Laravel Docs](https://laravel.com/docs/7.x/blade#displaying-components) for details.

There are some common component attributes notated below. Specific components may have additional attributes detailed below.
* name - The HTML [name](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#htmlattrdefname) attribute.
* label - An HTML [label](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label) element tied to the input item.

The following Tabler UI components are available in this package.

### Form Text component
`<x-form-text name="example-text-input" label="Text" placeholder="Input placeholder"/>`

![form-text](/screenshots/form-text.png)

```html
<div class="form-group">
  <label for="example-text-input" class="form-label">Text</label>
  <input name="example-text-input" type="text" class="form-control " placeholder="Input placeholder" autocomplete="off">
</div>
```

### Form Password component
`<x-form-password name="example-password-input" label="Pasword" placeholder="Input placeholder"/>`

![form-password](/screenshots/form-password.png)

```html
<div class="form-group">
  <label for="example-password-input" class="form-label">Pasword</label>
  <input name="example-password-input" type="password" class="form-control " placeholder="Input placeholder" autocomplete="off">
</div>
```


### Form Checkbox component
`<x-form-checkbox />`

### Form Color component
`<x-form-color />`

### Form Email component
`<x-form-email />`

### Form File component
`<x-form-file />`

### Form Number component
`<x-form-number />`

### Form Phone component
`<x-form-phone />`

### Form Radio component
`<x-form-radio />`

### Form Search component
`<x-form-search />`

### Form Select component
`<x-form-select />`

### Form Image Select component
`<x-form-select.images />`

### Form Tag Select component
`<x-form-select.tags />`

### Form User Select component
`<x-form-select.users />`

### Form Toggle component
`<x-form-toggle />`
