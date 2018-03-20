<h1>Many To Many Polymorphic Relations</h1>

<p>{{ $post->title }}</p>
<p>{{ $post->body }}</p>

<ul> 
@foreach ($post->tags as $tag)
    <li>{{ $tag->title }}</li>
@endforeach
</ul>
