<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts') }}" method="get">
        @csrf

        <label >
            Title検索
            <input type="text" name="keyword" value="{{ old('keyword') }}">
        </label>
        {{-- @error('title')
        <div class="error">{{ $message }}</div>
            @enderror --}}
        <div class="btn"><button>検索</button></div>
        <label>
            検索結果
            <ul>
                @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('text.posts',$post->id)}}">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </label>
    </form>

</x-layout>
