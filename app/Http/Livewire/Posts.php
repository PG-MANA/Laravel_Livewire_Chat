<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts = [];
    public $chat_group_name = '';
    protected $listeners = ['addPost'];
    public $current_max_id = 0;

    public function updatePostList() {
        $this->posts += Post::where([
            ['chat_group', '=', $this->chat_group_name],
            ['id', '>', $this->current_max_id]
        ])->get()->toArray();
        $last = end($this->posts);
        if($last !== false) {
            $this->current_max_id = $last['id'];    
        }
    }

    public function addPost(string $user_name, string $post_text, string $post_img) {
        $new_post = new Post();
        $new_post->user_name = $user_name;
        $new_post->post = $post_text;
        if(!empty($post_img)) {
            $new_post->post_img = $post_img;
        }
        $new_post->chat_group = $this->chat_group_name;
        $new_post->save();
        $this->updatePostList();
    }
    
    public function render()
    {
        $this->chat_group_name = Main::getChatGroupName();
        $this->updatePostList();
        return view('livewire.posts');
    }
}
