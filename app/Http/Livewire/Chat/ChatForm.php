<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class ChatForm extends Component
{
    public $message;

    public function mount() {
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.chat.chat-form');
    }
}
