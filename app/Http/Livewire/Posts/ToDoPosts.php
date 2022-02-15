<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use App\Models\PostType;
use Livewire\Component;
use Livewire\WithPagination;

class ToDoPosts extends Component
{
    use WithPagination;

    public $search = '';
    protected $listeners = ['PostCreateEvent' => 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')->orderBy('updated_at', 'desc')->paginate(10);
        $post_type = PostType::all();
        return view('livewire.posts.to-do-posts', compact('posts', 'post_type'));
    }
}
