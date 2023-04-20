<div>
<form wire:submit.prevent="postEntry">
    <p>User Name:<input type="text" wire:model.defer="post_user"></input></p>
    @error('post_text')
        <p style="color: red;"> User Name is empty or too long.</p>
    @enderror
    <div style="display: flex;flex-direction: column;">
        <div style="display: flex;">
            <textarea wire:model.defer="post_text" placeholder="What's up?"></textarea>
            @error('post_text')
            <p style="color: red;"> Text is empty or too long.</p>
            @enderror
            <label for="picture_file" style="margin-top: auto;margin-bottom: auto;">添付写真：</label>
            <input id="picture_file"  style="margin-top: auto;margin-bottom: auto;" type="file" wire:model.defer="post_picture" accept=".png,image/png"/>
            @error('post_picture')
            <p style="color: red;"> Post Error: {{ $message }}</p>
            @enderror
        </div>
        <input type="submit" style="margin-right: auto;" />
    </div>
</form>
</div>