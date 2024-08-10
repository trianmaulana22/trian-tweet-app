<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('投稿フォーム') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
        <div class="flex justify-between gap-2">
        <a href="{{ route('tweet.index') }}"
        class="inline-flex items-center border-indigo-300 px-3 py-1.5 rounded-md hover:bg-blue-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
            </path>
        </svg>
        <span class="ml-1  text-lg">戻る</span>
    </a>
</div><br>
        @if (session('feedback.success'))
            <p style="color: green">{{ session('feedback.success') }}</p>
            <script>
            setTimeout(function() {
                window.location.href = "{{ route('tweet.index') }}";
            }, 300);
        </script>
        @endif
        <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">
            @method('PUT')
            @csrf
            <label for="tweet-content">つぶやき</label><br><br>
            <span>140文字まで</span><br><br>
            <textarea id="tweet-content" class="text-gray-900 w-full h-40 drak:text-blue-600" type="text" name="tweet" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea><br><br>
            @error('tweet')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">編集</button>
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

