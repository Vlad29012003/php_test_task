

@extends('layouts.app')

@section('content')
    <h1>Список аккаунтов</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Баланс</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>{{ $account->id }}</td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->email }}</td>
                    <td>{{ $account->balance }}</td>
                    <td>
                        <a href="{{ route('accounts.edit', $account->id) }}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
