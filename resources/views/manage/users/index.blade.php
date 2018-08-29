@extends('layouts.manage')

@section('content')
    <b-container fluid>
        <b-row>
            <b-col><h1 class="">Manage Users</h1></b-col>
            <b-col>
                <div class="options">
                    <b-button href="{{ route('users.create') }}" variant="success" class="float-right">Create New User</b-button>
                </div>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-items-center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->toFormattedDateString() }}</td>
                                <td>
                                    <b-button variant="outline-primary" size="sm" href="{{ route('users.edit', $user->id) }}">Edit</b-button>
                                    <b-button variant="outline-danger" size="sm" href="{{ route('users.destroy', $user->id) }}">Remove</b-button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </b-col>
        </b-row>

        {{ $users->links() }}
    </b-container>
@endsection
