<x-layout>
    <div class="note-container-single-note">
        <h1>Create note</h1>
        <h2>note: {{$note->created_at}} </h2>
        <button class="note-buttons">
            <a href="{{route('note.edit', $note)}}" class="note-edit-button">edit</a>
            <button class="note-delete-button">delete</button>
        </button>
        <div class="note">
            <div class="note-body">
                {{$note->note}}
            </div>
        </div>
    </div>
</x-layout>
