<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class UserService
{

    /*
     * Добавление пользователя
     */
    public function store($data): ?Model
    {
        $user = User::create(['name' => $data['name']]);
        if (!$user) {
            return null;
        }
        return $user;
    }

    /*
     * Удаление пользователя по id
     */
    public function destroy($id): JsonResponse
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Пользователь не найден'
            ])->setStatusCode(404, 'User not found');
        }
        $user->delete();
        return response()->json([
            'status' => true,
            'message' => 'Пользователь удален',
        ])->setStatusCode(200, 'User deleted');
    }

}
