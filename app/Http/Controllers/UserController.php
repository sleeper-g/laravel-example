<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Метод для отображения данных авторизованного пользователя
    public function show()
    {
        // Проверка, что пользователь авторизован
        if (Auth::check()) {
            // Получаем данные авторизованного пользователя
            $user = Auth::user();

            return view('user.profile', compact('user'));
        }

        // Если пользователь не авторизован, перенаправляем на страницу входа
        return redirect()->route('login');
    }
}
