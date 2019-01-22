<form method="POST" action="{{ route('audience') }}">
    @csrf
    <div>
        <input name="email" id="type" type="email" value="{{ old('email') }}">
    </div>
    <div>
        <button class="">Sign Up</button>
    </div>
</form>