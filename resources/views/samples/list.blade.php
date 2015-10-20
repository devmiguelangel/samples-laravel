@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('deleted'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    Contacto borrado.
                    <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Deshacer el cambio</a>
                </div>
            @endif

            @if(Session::has('restored'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    Contacto restaurado.
                </div>
            @endif

            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->full_name }}</td>
                    <td>{{ $contact->phone_number }}</td>
                    <td>{{ $contact->email}}</td>
                    <td>
                        <a href="{{ route('contact/delete',[$contact->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection