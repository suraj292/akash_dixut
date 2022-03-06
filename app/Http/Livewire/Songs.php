<?php

namespace App\Http\Livewire;

use App\Models\youtubeBlog;
use Livewire\Component;

class Songs extends Component
{
    public $songs;
    public function render()
    {
        return view('livewire.songs');
    }

    public function mount()
    {
        $this->songs = youtubeBlog::all();
    }
}
