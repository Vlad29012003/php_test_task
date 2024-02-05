<form action="{{ route('accounts.store') }}" method="POST">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>

    <label for="balance">Баланс:</label>
    <input type="number" name="balance" required>
    <br>

    <button type="submit">Создать</button>
</form>
