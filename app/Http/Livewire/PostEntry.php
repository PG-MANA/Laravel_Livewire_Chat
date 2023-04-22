<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;

class PostEntry extends Component
{
    use WithFileUploads;

    public string $post_user = '';
    public string $post_text = '';
    public $post_picture;
    
    protected $rules = [
        'post_user' => 'required|string',
        'post_text' => 'required|string|max:250',
        'post_picture' => 'nullable|image|max:2048',
    ];
    
    public function postEntry()
    {
        $this->validate();
        $post_img_path = '';
        $user_name = htmlspecialchars($this->post_user, ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE);
        $post_text = htmlspecialchars($this->post_text, ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE);
        if(!empty($this->post_picture)) {
            $post_img_path = $this->post_picture->store('picture');
        }
        $this->emit('addPost', $user_name, $post_text, $post_img_path);
        //$this->post_user = '';
        $this->post_text = '';
    }
    
    public function render()
    {
        return view('livewire.post-entry');
    }
}
