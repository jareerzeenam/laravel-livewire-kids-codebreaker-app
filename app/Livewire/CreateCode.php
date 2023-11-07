<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
    // Add more as needed from https://fonts.google.com/icons
    'enable',
    'public',
    'grade',
    'rocket',
    'cookie',
    'thunderstorm',
    'face',
    'skull',
    'home',
    'mode_cool',
    'bedroom_baby',
    'flatware',
    'single_bed',
    'sprinkler',
    'umbrella',
    'token',
    'skillet',
    'stadia_controller',
    'airwave',
    'floor_lamp',
    'close',
    'quiet_time',
    'heat',
    'tools_power_drill',
    'nest_eco_leaf',
    'air_freshener',
    ];

    public function letters() : array
    {
        shuffle($this->symbols);

        return collect(range('a','z'))->combine($this->symbols)->toArray();

//        return collect($letters)->combine($this->symbols)->toArray();
    }
    public function render()
   {
        return view('livewire.create-code');
    }
}



