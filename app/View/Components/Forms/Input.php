<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $type;
    public $name;
    public $value;
    public $placeholder;
    public $autocomplete;
    public $required;
    public $autofocus;

    public function __construct(
        $label,
        $name,
        $value = '',
        $type = 'text',
        $placeholder = '',
        $autocomplete = '',
        $required = false,
        $autofocus = false
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->autocomplete = $autocomplete;
        $this->required = $required;
        $this->autofocus = $autofocus;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
