@extends('layouts.app')
@section('content')
<div class="container">
    <h2>User Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Leader Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Admin Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection
