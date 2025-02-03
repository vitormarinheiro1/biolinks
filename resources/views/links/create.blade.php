<div>
    <h1>Criar um link</h1>

    <form action="{{ route('links.create') }}" method="post">
        @csrf

        @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
        @endif

        <div>
            <input name="link" placeholder="Link" value="{{ old('link') }}" />
            @error('link')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input name="name" placeholder="Name" value="{{ old('name') }}" />
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Salvar</button>
    </form>
</div>
