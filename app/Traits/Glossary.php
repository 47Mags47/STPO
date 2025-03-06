<?php

namespace App\Traits;

trait Glossary
{
    use Named;

    ### Настройки
    ##################################################
    public function getKeyName()
    {
        return 'code';
    }
    public function getKeyType()
    {
        return 'string';
    }
    public function getIncrementing()
    {
        return false;
    }
    public function getGuarded()
    {
        return [];
    }
    public function usesTimestamps()
    {
        return false;
    }

    ### Функции
    ##################################################
    public static function whereCode(string $code){
        return self::where('code', $code);
    }
}
