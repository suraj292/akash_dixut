<?php

namespace App\Http\Livewire\Admin;

use App\Models\youtubeBlog;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Dashboard extends Component
{
    public $links, $addsongDiv,$editSongDiv, $link,$title,$description;
    public $editTitle,$editLink,$editDescription;
    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('layouts.admin');
    }

    public function mount()
    {
        $this->links = youtubeBlog::all();
//        dd($this->links);
    }

    public function addSongBtn()
    {
        $this->addsongDiv = true;
    }

    public function addSong()
    {
       $links = youtubeBlog::create([
           'title'=>$this->title,
           'link'=>$this->link,
           'description'=>$this->description
       ]);
       $links->save();
       $this->title='';$this->link='';$this->description='';
       $this->addsongDiv=null;
        $this->links = youtubeBlog::all();
        Session::flash('saved', 'song has been added');
    }

    public function delete($id)
    {
        $post = youtubeBlog::find($id);
        $post->delete();
        $this->links = youtubeBlog::all();
    }

    public function edit($id)
    {
        $this->editSongDiv = $id;
        $song = youtubeBlog::find($id);
        $this->editTitle = $song->title;
        $this->editLink = $song->link;
        $this->editDescription = $song->description;
    }

    public function updateSong()
    {
        $song = youtubeBlog::find($this->editSongDiv);
        $song->update([
            'title'=>$this->editTitle,
            'link'=>$this->editLink,
            'description'=>$this->editDescription
        ]);
        $this->editTitle = null;
        $this->editLink = null;
        $this->editDescription = null;
        $this->editSongDiv =null;
        Session::flash('updated', 'song has been updated');
        $this->links = youtubeBlog::all();
    }
}
