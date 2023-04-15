<div>
@foreach($posts as $post)
<div wire:key="{{ $post['id'] }}">
    <b style="font-size: 1.2em;">{{ $post['user_name'] }}</b>
    <p>{{ $post['post'] }}</p>
</div>
@endforeach
</div>