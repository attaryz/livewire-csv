<?php

namespace App\Http\Livewire;

use League\Csv\Reader;
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
        $this->validateOnly('files');
        $csv->$this->readCsv($this->getRealPath());
        dd($csv);
    }

        protected function readCsv(string $path): Reader
        {
            $stream = fopen($path, 'r');
            $csv = Reader::createFromStream($stream);
            $csv->setHeaderOffset(0);

            return $csv;
        }
    public function render()
    {
        return view('livewire.csv-importer');
    }
}
