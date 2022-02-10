<div class="comic-list">
    <div class="section-title">
        {{$title}}
    </div>

    <div class="comics">
        @foreach ($comics_array as $comic)
            {{-- Single Comic --}}
            <div class="single-comic">
                <a href="{{ route('product', ['id' => $comic['id']]) }}">
                    <div class="comic-thumb">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <div class="comic-title">
                        {{$comic['series']}}
                    </div>
                </a>    
            </div>
        @endforeach
    </div>

    <div class="more">
        <button>
            Load More
        </button>
    </div>
</div>