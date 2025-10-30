<x-app-layout>
    <a href="/posts">All posts</a>
    
    @foreach($posts as $post)
    <h1>Title: {{ $post->title }}</h1>
    <p> Content: {{ $post->content }}</p>
    @endforeach
</x-app-layout>
