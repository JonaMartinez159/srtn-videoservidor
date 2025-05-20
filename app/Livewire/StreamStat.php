<?php

namespace App\Livewire;

use Livewire\Component;

class StreamStat extends Component
{
    public $host;

    public function render()
    {
        $this->host = env('APP_HOST');
        return view('livewire.stream-stat');
    }
}
