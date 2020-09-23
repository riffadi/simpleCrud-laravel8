<div>
    {{ $body }}
    <textarea
        wire:model="body"
        class="w-full border-2 border-black rounded-lg appearance-none leading-tight focus:outline-none focus:shadow-outline pl-2 pt-2" 
        placeholder="Post Something..."
        rows="5">
    </textarea>
    <div class="flex justify-end mt-2">
        <button
            wire:click="createPost"
            class="bg-blue-600 rounded-lg px-8 py-1 text-white text-2xl focus:outline-none hover:bg-blue-400">
            Post
        </button>
    </div>
</div>
