<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $chat_group_name = '';
    
    public function enterNewGroup()
    {
        $this->chat_group_name = htmlspecialchars($this->chat_group_name, ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE);
        return redirect()->to('/group/' . $this->chat_group_name . '/');
    }
    
    public static function getChatGroupName(): string
    {
        return htmlspecialchars(\Route::current()->parameter('chat_group_name'), ENT_HTML5 | ENT_QUOTES | ENT_SUBSTITUTE);
    }
    
    public function render()
    {
        $this->chat_group_name = self::getChatGroupName();
        if(!empty($this->chat_group_name)) {
            return view('livewire.main')
                ->layout('layouts.app', ['chat_group_name' => $this->chat_group_name]);
        } else {
            return view('livewire.welcome')
                ->layout('layouts.app', ['chat_group_name' => '']);
        }
    }
}
