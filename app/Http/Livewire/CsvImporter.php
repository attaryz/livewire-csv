<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CsvImporter extends Component
{

    public bool $open = false;

    public string $model;
    protected $listeners = [
        'toggle'
    ];



    public function toggle(){
        $this->open = !$this->open;
    }

    public function render()
    {
        return view('livewire.csv-importer');
    }
}
