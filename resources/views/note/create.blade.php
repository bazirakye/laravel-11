<x-app-layout>
    <div class="note-container-single-note">
        <h1>Create note</h1>
        <form action="{{route('note.store')}}" class="note" method="POST">
            @csrf
            <h2>note date</h2>
            <textarea name="note" cols="30" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <button class="note-buttons">
                <a href="{{route('note.index')}}" class="note-cancel-button">cancel</a>
                <button class="note-button-submit">submit</button>
            </button>
        </form>
    </div>
</x-app-layout>
