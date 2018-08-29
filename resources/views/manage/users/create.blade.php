@extends('layouts.manage')

@section('content')
    <b-container fluid>
        <b-row>
            <b-col md="6">
                <b-form action="{{ route('users.store') }}" method="POST" >
                    {{ csrf_field() }}
                    <b-form-group id="userName" label="Name:" label-for="nameInput">
                        <b-form-input id="nameInput" name="name" type="text" required placeholder="Enter Your Name ..."></b-form-input>
                    </b-form-group>
                    <b-form-group id="userEmail" label="Email:" label-for="emailInput">
                        <b-form-input id="emailInput" name="email" type="email" required placeholder="Enter Your Email ..."></b-form-input>
                    </b-form-group>
                    <b-form-group id="userPassword" label="Password:" label-for="passwordInput">
                        <b-form-input id="passwordInput" name="password" v-if="!auto_password" type="text" required placeholder="Enter Your Password ..."></b-form-input>
                    </b-form-group>
                    <b-form-group id="passwordGenerate">
                        <b-form-checkbox-group id="passwordChecks" v-model="auto_password">
                            <b-form-checkbox id="generateCheck" name="auto_generate">Auto Generate Password</b-form-checkbox>
                        </b-form-checkbox-group>
                    </b-form-group>
                    <b-button variant="success" type="submit">Create User</b-button>
                </b-form>
            </b-col>
        </b-row>
    </b-container>
@endsection


@section('scripts')

@endsection
