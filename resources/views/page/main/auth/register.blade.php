@extends('layouts.auth-page')
@section('page-name')
    Регистрация
@endsection

@section('body')
    <x-form.form action="" method="POST" header="Регистрация">
        <x-form.input label='Фамилия' type='text' name="last_name" class="classic req" />
        <x-form.input label='Имя' type='text' name="first_name" class="classic req" />
        <x-form.input label='Отчество (при наличии)' type='text' name="middle_name" class="classic" />
        <x-form.select label='Город' name='city_id' class="classic">
            @foreach ($cityes as $city)
                <x-form.option val='{{ $city->id }}'> {{ $city->name }} </x-form.option>
            @endforeach
        </x-form.select>
        <x-form.select label='Подразделение' name='division_id' class="classic depended req" depend="city_id">
            @foreach ($divisions as $division)
                <x-form.option val='{{ $division->id }}' data-depend="{{$division->city_id}}"> {{ $division->name }} </x-form.option>
            @endforeach
        </x-form.select>
        <x-form.input label='Адрес эл. почты' type='email' name="email" class="classic req" />
        <x-form.input label='Логин' type='text' name="login" class="classic req"/>
        <x-form.input label='Пароль' type='password' name="password" class="classic req"/>
        <x-form.input label='Повторите пароль' type='password' name="password_confirmation" class="classic req"/>
        <x-form.input label='Зарегистрироваться' type='sbm'/>
        <x-form.other>
            <p>Уже есть аккаунт, <x-link class="default" href="{{route('login')}}">Войти!</x-link></p>
        </x-form.other>
    </x-form.form>
@endsection
