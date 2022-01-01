<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePosts extends Component
{
    public $open = false;
    public $title;
    public $description;
    public $content;

    public function insert() {
        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
        ]);

        $this->reset(['open', 'title', 'description', 'content']);
        $this->emit('render');
        $this->emit('alert', 'Excelente, Post creado correctamente');
    }

    public function render()
    {
        return view('livewire.create-posts');
    }
}
