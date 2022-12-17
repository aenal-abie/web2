<form method="post" action="{{url("login/create")}}">
    @csrf
    <label>Username</label>
    <input name="username" />

    <label>Password</label>
    <input name="password" />

    <button type="submit">Login</button>
</form>
