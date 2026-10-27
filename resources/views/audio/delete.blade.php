<form action="{{ route('audio.destroy', $item->id) }}" method="post">
    @csrf
    @method('DELETE')

    <button type="submit" class="rounded bg-red-600 px-3 py-2 text-white hover:bg-red-700">
        Delete
    </button>
</form>
