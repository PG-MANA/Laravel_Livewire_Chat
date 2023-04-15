<div>
    <p>User Name:<input type="text" wire:model.defer="post_user"></input></p>
    <div style="display: flex;">
        <textarea wire:model.defer="post_text" placeholder="What's up?"></textarea>
        <input type="submit" wire:click="postEntry" />
    </div>
</div>
