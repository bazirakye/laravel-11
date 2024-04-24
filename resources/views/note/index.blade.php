<x-app-layout>
    <div class="note-container">
        <a href="{{route('note.create')}}" class="new-note-btn">
            new note
        </a>
        <div class="note">
            @foreach ($notes as $note)
            <div class="note-body">
                {{Str::words($note->note, 30)}}
            </div>
            <div class="note-buttons">
                <a href="{{route('note.show', $note)}}" class="note-edit-button">View</a>
                <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                <form action="{{route('note.destroy', $note)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-edit-button">Delete</button>
                </form>
            </div>
            @endforeach
            {{$notes->links()}}
        </div>
    </div>
</x-app-layout>
