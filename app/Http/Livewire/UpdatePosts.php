<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UpdatePosts extends Component
{
    public $open = false;
    public $post_id;
    public $user_id;
    public $title;
    public $description;
    public $content;
    protected $rules = [
        'title' => 'required',
        'description' => 'required|max:355',
        'content' => 'required'
    ];

    public function mount($post_id) {
        $this->post_id = $post_id;
    }

    public function edit(){

        $this->validate();

        DB::table('posts')->where('id', "=", $this->post_id)->update([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'user_id' => Auth::user()->id
        ]);

        $this->emitTo('table-posts', 'render');
        $this->reset(['open', 'title', 'description', 'content']);
        $this->emit('update-alert', 'Post Modificado con exito');
    }

    public function render()
    {
        // $post_selected = DB::table('posts')->where('id', '=', $this->post_id)->get();
        $post_selected = Post::where('id', '=', $this->post_id)->first();
        return view('livewire.update-posts', compact('post_selected'));
    }
}
