<div>
    <h1>Editar um link :: {{ $link->id }}</h1>

    <form action="{{ route('links.edit', $link) }}" method="post">
        @csrf
        @method("put")

        @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
        @endif

        <div>
            <input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Salvar</button>
    </form>
</div>
