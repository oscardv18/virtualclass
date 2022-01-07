<?php

namespace App\Http\Livewire;

use App\Models\File;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreatePosts extends Component
{
    use WithFileUploads;
    public $open = false;
    public $title, $description, $content, $post_type_id, $files = [], $identificator, $files_url;

    public function mount() {
        $this->identificator = rand();
    }

    public function updatedPhoto(){
        $this->validate([
            'files.*' => 'max:6049',
        ]);
    }

    protected $rules = [
        'title' => 'required',
        'description' => 'required|max:355',
        'content' => 'required',
        'post_type_id' => 'required',
        'files.*' => 'max:6048'
    ];

    # Metodo para poder guardar archivos, recibe el id del post que se acaba de subir. Es necesaria que se llama posterior a la creacion del post
    public function saveFile($posts_id){
        foreach ($this->files as $file) {
            $this->files_url = $file->store('posts');

            File::create([
                'url_file' => $this->files_url,
                'post_id' => $posts_id
            ]);
        }
    }

    public function insert() {

        # Validar las reglas
        $this->validate();

        # Crear Post
        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'user_id' => Auth::user()->id,
            'post_type_id' => $this->post_type_id,
        ]);

        $post_id = DB::table('posts')->select('id')->orderBy('id', 'desc')->first();

        $this->saveFile($post_id->id);

        # reseteo del id del input de los archivos para evitar que quede registros antiguos
        $this->identificator = rand();

        $this->reset(['open', 'title', 'description', 'content', 'files', 'post_type_id']);
        $this->emit('alert', 'Excelente, Post creado correctamente');
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.create-posts');
    }
}
