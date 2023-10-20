<?php
namespace App\Services;

use App\Models\User;

class UserService
{
    public static function getById(int $userId)
    {
        $user = User::findOrFail($userId);
        return $user;
    }

    public static function deleteById(int $userId)
    {
        $user = User::findOrFail($userId);
        return $user->delete();
    }
}
