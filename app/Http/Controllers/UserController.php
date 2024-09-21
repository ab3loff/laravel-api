<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserService;
use Illuminate\View\View;

class UserController extends Controller
{

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /*
     * Вывод страницы добавления пользователя
     */
    public function index(): View
    {
        return view('user.create', ['title' => 'Добавить пользователя']);
    }

    /*
     * Добавление пользователя
     */
    public function store(UserRequest $request): ?Model
    {
        $data = $request->validated();

        return $this->service->store($data);
    }

    /*
     * Показ списка пользователей JSON
     */
    public function showAll(): JsonResponse
    {
        $users = User::select('id', 'name')->get();
        return response()->json($users);
    }

    /*
     * Удалить пользователя по id
     */
    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }
}
