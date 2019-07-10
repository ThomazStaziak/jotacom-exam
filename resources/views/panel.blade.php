@extends('layouts.app')

@section('content')
<div class="container">
    <table style="border: 1px solid #000;" class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Horário para contato</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leads as $lead)
            <tr>
                <th scope="row">{{ $lead['id'] }}</th>
                <td>{{ $lead['name'] }}</td>
                <td>{{ $lead['email'] }}</td>
                <td>{{ $lead['state'] }}</td>
                <td>{{ $lead['city'] }}</td>
                <td>{{ $lead['phone_number'] }}</td>
                <td>{{ $lead['contact_time'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
   
@endsection