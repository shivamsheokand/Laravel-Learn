<div>
    <h1>Profile Page</h1>
    @if(session('name'))
    <h1>Welcome {{session('name')}}</h1>
    <a href="logout">Logout</a>
    @else
    <h1>session not found....</h1>
    <a href="form">Login</a>
    @endif
    {{session('all')['password']}}
    <!-- An unexamined life is not worth living. - Socrates -->
</div>
