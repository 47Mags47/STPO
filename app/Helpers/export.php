<?php
if (! function_exists('getOld')) {
    /**
     * Возвращает старое значение для поля
     * @param string $name Наименование поля
     * @return mixed старое значение для поля
     */
    function getOld(string $name)
    {
        $dot_name = str_replace(']', '', str_replace('[', '.', $name));

        $value = old($name);
        $value = $value ?? old($dot_name);
        $value = $value ?? request()->input($name);
        $value = $value ?? request()->input($dot_name);

        return $value;
    }
}
