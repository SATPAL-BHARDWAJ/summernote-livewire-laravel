<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $postTitle;
    public $postContent;

    public function mount() {
        $this->postContent = "rinky ke papa ha ha ha";
    }

    public function render()
    {
        return view('livewire.create-post');
    }

    public function submitPost($content) {
        
        dd($this->postTitle, $content, $this->postContent);
    }
}
