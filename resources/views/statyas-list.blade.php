<section class="eight columns">
    @if(isset($rubric))
    <h3>{{ $rubric->rubric_name}}</h3>
    @endif
    @foreach($statyas as $statya)
    <article class="blog_post">
        <div class="three columns">
            <a href="{{ asset('storage/images/' . $statya->image) }}" class="th" target="_blank">
                <img src="{{ asset('storage/images/' . $statya->image) }}" alt="desc" />
            </a>
        </div>
        <div class="nine columns">
            <a href="/statya/{{$statya->id}}">
                <h4>{{ $statya->title }}</h4>
            </a>
            <p>{{ $statya->content }}</p>
            @if($isAdmin)
            <form action="/delete/{{ $statya->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button style='background-color: white; border: none; cursor: pointer;'><a>Удалить</a></button>
            </form>
            @endif
        </div>
    </article>
    @endforeach
</section>