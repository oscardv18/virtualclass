<?php

namespace App\Http\Livewire;

use App\Models\File;
use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $files = File::orderBy('id', 'desc')->get();
        return view('livewire.show-posts', compact('posts', 'files'));
    }
}
