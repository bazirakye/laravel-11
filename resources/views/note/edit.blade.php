<x-layout>
    <div class="note-container-single-note">
        <h1>Edit note</h1>
        <form action="{{ route('note.update', $note) }}" class="note" method="POST">
            @csrf
            @method('PUT')
            <h2>note : {{ $note->created_at }}</h2>
            <textarea name="note" cols="30" rows="10" class="note-body" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <button class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">cancel</a>
                <button class="note-button-submit">submit</button>
            </button>
        </form>
    </div>
</x-layout>
