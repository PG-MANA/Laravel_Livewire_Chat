<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostEntry extends Component
{
    public string $post_user = '';
    public string $post_text = '';
    
    protected $rules = [
        'post_user' => 'required|string',
        'post_text' => 'required|string|max:250',
    ];
    
    public function postEntry()
    {
        $this->validate();
        $user_name = htmlspecialchars($this->post_user, ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE);
        $post_text = htmlspecialchars($this->post_text, ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE);
        $this->emit('addPost', $user_name, $post_text);
        //$this->post_user = '';
        $this->post_text = '';
    }
    
    public function render()
    {
        return view('livewire.post-entry');
    }
}
