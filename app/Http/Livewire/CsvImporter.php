<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CsvImporter extends Component
{
    use WithFileUploads;

    public bool $open = false;

    public string $model;
    public $file;
    protected $listeners = [
        'toggle'
    ];

    public function rules()
    {
        return [
            'file' => ['required', 'mime:csv', 'max:51200'],
        ];
    }

    public function updatedFile()
    {
//            dd('file_chosen');
        //validate data

    }

    public function toggle()
    {
        $this->open = !$this->open;
    }

    public function render()
    {
        return view('livewire.csv-importer');
    }
}
