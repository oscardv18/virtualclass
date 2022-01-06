<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DeletePosts extends Component
{
    public $open = false;
    public $post_id;
    public $post_title;

    public function mount($post_id, $postTitle) {
        $this->post_id = $post_id;
        $this->post_title = $postTitle;
    }

    public function delete() {
        DB::table('posts')->where('id', '=', $this->post_id)->delete();

        $this->emit('render');
        $this->reset(['open', 'post_id', 'post_title']);
        $this->emit('delete-alert', 'Excelente, Post eliminado correctamente');
    }

    public function render()
    {
        return view('livewire.delete-posts');
    }
}
