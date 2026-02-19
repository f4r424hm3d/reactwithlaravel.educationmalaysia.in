<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputField extends Component
{
  public $label;
  public $type;
  public $name;
  public $id;
  public $ft;
  public $sd;
  public $required;
  public $placeholder;

  public function __construct($label, $type, $name, $id, $ft, $sd, $required = null, $placeholder = null)
  {
    $this->label = $label;
    $this->type = $type;
    $this->name = $name;
    $this->id = $id;
    $this->ft = $ft;
    $this->sd = $sd;
    $this->required = $required;
    $this->placeholder = $placeholder;
  }

  public function render()
  {
    return view('components.input-field');
  }
}
