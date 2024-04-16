<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts') }}" method="get">
        @csrf

        <label >
            Title検索
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')
        <div class="error">{{ $message }}</div>
            @enderror
        <div class="btn"><button>検索</button></div>
        <label>
            検索結果
            <li><a href=""></a></li>
        </label>
    </form>

</x-layout>
