
@extends('layouts.app')

@section('content')
    <h1>Редактировать аккаунт</h1>

    <form action="{{ route('accounts.update', $account->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Имя:</label>
        <input type="text" name="name" value="{{ $account->name }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $account->email }}" required>
        <br>

        <label for="balance">Баланс:</label>
        <input type="number" name="balance" value="{{ $account->balance }}" required>
        <br>

        <button type="submit">Сохранить изменения</button>
    </form>
@endsection

