@extends('layouts.manage')

@section('content')
    <b-container fluid>
        <b-row>
            <b-col>
                <h1 class="title">{{ $user->name }}</h1>
                <h4 class="subtitle">View User Details</h4>
            </b-col>
        </b-row>
    </b-container>
@endsection
