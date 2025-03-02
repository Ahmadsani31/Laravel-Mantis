<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HorizontalInput extends Component
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
    public $labelCol; // Ukuran kolom untuk label
    public $inputCol; // Ukuran kolom untuk input
    public function __construct(
        $label,
        $type = 'text',
        $name,
        $value = '',
        $placeholder = '',
        $autocomplete = '',
        $required = false,
        $autofocus = false,
        $labelCol = '2', // Default ukuran kolom untuk label
        $inputCol = '10' // Default ukuran kolom untuk input
    ) {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->autocomplete = $autocomplete;
        $this->required = $required;
        $this->autofocus = $autofocus;
        $this->labelCol = $labelCol;
        $this->inputCol = $inputCol;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.horizontal-input');
    }
}
