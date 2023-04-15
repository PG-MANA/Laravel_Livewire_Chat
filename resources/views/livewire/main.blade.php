<main>
<div>
    <h1>Chat: {{ $chat_group_name }}</h1>
</div>
@livewire('post-entry', ['chat_group_name' => $chat_group_name])
<hr/>
@livewire('posts', ['chat_group_name' => $chat_group_name])
</main>
