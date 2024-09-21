<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;
use Illuminate\View\View;

class SearchController extends Controller
{

    /*
     * Вывод страницы поиска пользователей
     */
    public function index(): View
    {
        return view('search', ['title' => 'Поиск пользователя']);
    }

    /*
     * Поиск пользователей по буквам
     */
    public function search(Request $request): string|array
    {
        return SearchService::search($request->input('name'));
    }
}
