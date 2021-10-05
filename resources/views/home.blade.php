<h1>Salut {{ Auth::user()->name }}</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Déconnexion</button>

</form>
