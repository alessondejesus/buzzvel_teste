<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Exception;

class Home extends Component
{
    protected $listeners = [
        'get_reference' => 'getReference',
        'submit',
    ];

    protected $rules = [
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ];

    public $latitude,
        $longitude;

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function getReference()
    {
        $latitude = (float)str_replace(',', '.', $this->latitude);
        $longitude = (float)str_replace(',', '.', $this->longitude);

        return array($latitude, $longitude);
    }

    public function submit()
    {
        $this->validate($this->rules);

        try {
            $reference = $this->getReference();

            $this->emit('search_hotels', $reference);
        } catch (Exception $exception) {

            session()->flash('message', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.home');
    }
}
