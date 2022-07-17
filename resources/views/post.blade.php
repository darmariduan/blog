@extends('layouts.main')

@section('container')
<article>
<h1 class="mb-5">{{ $post->title }}</h1>

{{-- Tag html post hidden --}}
{!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>
@endsection

