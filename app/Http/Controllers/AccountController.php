<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        // Валидация данных формы
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'balance' => 'required|numeric',
        ]);

        // Создание нового аккаунта
        Account::create($request->all());

        return redirect()->route('accounts.index')
            ->with('success', 'Account created successfully.');
    }

    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }

    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, Account $account)
    {
        // Валидация данных формы
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Обновление данных аккаунта
        $account->update($request->all());

        return redirect()->route('accounts.index')
            ->with('success', 'Account updated successfully.');
    }

    public function destroy(Account $account)
    {
        // Удаление аккаунта
        $account->delete();

        return redirect()->route('accounts.index')
            ->with('success', 'Account deleted successfully.');
    }
}
