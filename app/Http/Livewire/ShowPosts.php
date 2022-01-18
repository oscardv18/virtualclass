<?php

namespace App\Http\Livewire;

use App\Models\File;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    protected $listeners = ['render'];

    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        $files = File::orderBy('id', 'desc')->get();
        return view('livewire.show-posts', compact('posts', 'files'));
    }
}
