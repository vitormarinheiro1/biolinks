<div>
    <h1>Register</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif

        <div>
            <input type="name" name="name" placeholder="Name" value="{{ old('name') }}" />
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" />
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="email" name="email_confirmation" placeholder="E-mail Confirmation" />
        </div>

        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Registrar</button>
    </form>
</div>
