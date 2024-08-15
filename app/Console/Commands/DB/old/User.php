<?php

namespace App\Console\Commands\DB\old;

use Illuminate\Console\Command;
use App\Models\Main\Main_User;
use mysqli;

class User extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'old:user {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Копирует пользователя по id со 110 сервера';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Копирование пользователя с id " . $this->argument('user_id'));
        $old_DB = new mysqli('192.168.0.110', 'root', 'YGF!PSXu]9L(V[pn', 'MSZN_MAIN');
        $sql = "SELECT * FROM `users` LEFT JOIN `user_new_hash` ON `user_new_hash`.`user` = " . $this->argument('user_id') . " WHERE `id` = " . $this->argument('user_id');
        $user = $old_DB->query($sql)->fetch_assoc();

        if (!isset($user['hash']) or $user['hash'] == NULL) {
            $this->error("Хеш пользователя не найден");
            return;
        }

        if (Main_User::where('login', $user['login'])->count() != 0) {
            $this->error("Пользователь с таким login - " . $user['login'] ." уже существует");
            return;
        }

        try {
            Main_User::unguard();
            Main_User::create([
                'first_name' => $user['last_name'],
                'middle_name' => $user['patronymic'],
                'last_name' => $user['first_name'],
                'nickname' => $user['reduction_fio'],
                'phone' => $user['phone'],
                'dop_phone' => $user['dop_phone'],
                'logo' => NULL,
                'login' => $user['login'],
                'password' => $user['hash'],
                'role_id' => ($user['type'] == 1 or $user['type'] == 2) ? 2 : 4,
                'division_id' => $user['division'],
                'created_at' => now(),
            ]);
            echo "Пользователь добавлен\n";
        } catch (\Throwable $th) {
            dd($th);
        }
        Main_User::reguard();
    }
}
