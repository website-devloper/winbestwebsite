<!-- resources/views/users/create.blade.php -->

@extends('layouts.user_type.auth')

@section('content')

<div class="card mb-4 mx-4">
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete you can use all functional!</strong> 
        </span>
    </div>

    <div class="card-header">
        <h5 class="mb-0">Create New User</h5>
    </div>
    <div class="card-body">
        <!-- New user form -->
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="associé">Associé</option>
                    <option value="gérant">Gérant</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
</div>

@endsection
