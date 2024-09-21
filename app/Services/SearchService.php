<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchService
{

    /*
     * Поиск пользователей по буквам
     */
    public static function search(string $name): string|array
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();

        $users = collect($users)->filter(function ($user) use ($name) {
            return stripos($user['name'], $name) !== false;
        })->toArray();

        if (empty($users)) {
            return 'Пользователь не найден';
        }
        return $users;

    }
}
