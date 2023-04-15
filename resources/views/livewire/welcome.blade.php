<main><div>
    <h1>Chat Application with Laravel and LiveWire</h1>
    <p>Please enter the chat group name you want to attend.</p>
    <p>Chat Group Name:
        <input type="text" wire:model.defer="chat_group_name"></input>
        <input type="submit" wire:click="enterNewGroup" />
    </p>
</div></main>