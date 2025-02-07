<div>
    <h1>Profile</h1>

    @if($message = session('message'))
    <div>{{ $message }}</div>
    @endif

    <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        @METHOD('PUT')

        <div>
            <img src="/storage/{{ $user->photo }}" alt="Profile Picture">
            <input type="file" name="photo" />
        </div>

        <div>
            <input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <textarea name="description" placeholder="Breve resumo">{{ old('description', $user->description) }}</textarea>
            @error('description')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <span>biolinks.com.br/</span>
            <input name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}" />
            @error('handler')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button>Update</button>
    </form>
</div>
