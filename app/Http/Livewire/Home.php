<?php

namespace App\Http\Livewire;

use App\Models\youtubeBlog;
use Livewire\Component;

class Home extends Component
{
    public $songs;
    public function render()
    {
        return view('livewire.home');
    }

    public function mount()
    {
        $this->songs = youtubeBlog::all();
    }
}
