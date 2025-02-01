<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>
        @endif

        <div>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" />
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Logar</button>
    </form>
</div>