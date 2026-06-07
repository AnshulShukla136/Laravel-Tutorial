<div>
    <h1>Profile page</h1>
    @if(session('user'))
    <h1>Welcome, {{session('user')}}</h1>
    @else
    <h1>No User found</h1>
    @endif
</div>
