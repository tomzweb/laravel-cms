
<ul class="list-group mb-4">
    @foreach ($posts as $post)
        <li class="list-group-item">
                <a href="{!! url("/".$post->type->slug."/".$post->slug) !!}">{{ $post->title }}</a>
                - <a href="{!! url("/".$post->type->slug."/".$post->slug."/edit") !!}">edit</a>
        </li>
    @endforeach
</ul>
