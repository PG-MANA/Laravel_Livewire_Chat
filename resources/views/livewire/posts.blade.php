<div>
@foreach($posts as $post)
<div wire:key="{{ $post['id'] }}">
    <b style="font-size: 1.2em;">{{ $post['user_name'] }}</b>
    <p>{{ $post['post'] }}</p>
    @if(!empty($post['post_img']))
    <div><img src="/{{ $post['post_img'] }}" /></div>
    @endif
</div>
@endforeach
</div>