<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePosts extends Component
{
    public $open = false;
    public $title;
    public $description;
    public $content;

    protected $rules = [
        'title' => 'required',
        'description' => 'required|max:355',
        'content' => 'required'
    ];

    public function insert() {

        $this->validate();

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'user_id' => Auth::user()->id
        ]);

        $this->reset(['open', 'title', 'description', 'content']);
        $this->emit('alert', 'Excelente, Post creado correctamente');
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.create-posts');
    }
}
