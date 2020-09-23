<div>
    @foreach ($posts as $post)
        <div class="bg-white p-4 my-4 shadow-xl rounded-lg">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-sm text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <span>{{ $post->body }}</span>
        </div>
    @endforeach
</div>
