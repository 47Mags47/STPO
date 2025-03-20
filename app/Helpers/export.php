<?php

use App\Models\Main\User;
use Illuminate\Support\Facades\Auth;

if (! function_exists('getOld')) {
    /**
     * Возвращает старое значение для поля
     * @param string $name Наименование поля
     * @return mixed старое значение для поля
     */
    function getOld(string|null $name)
    {
        if ($name === null)
            return;

        $dot_name = str_replace(']', '', str_replace('[', '.', $name));

        $value = old($name);
        $value = $value ?? old($dot_name);
        $value = $value ?? request()->input($name);
        $value = $value ?? request()->input($dot_name);

        return $value;
    }

    function user(int|null $id = null): User
    {
        return $id !== null
            ? User::whereKey($id)->get()->first()
            : Auth::user();
    }

    function systemUser(): User
    {
        return User::where('login', 'system')->first();
    }
}
