<?php

namespace App\Console\Commands\CopyOldDB;

use App\Models\Main\Main_User;
use Illuminate\Console\Command;
use mysqli;

class copyUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:copyUser {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $old_DB = new mysqli('192.168.0.110', 'root', 'YGF!PSXu]9L(V[pn', 'MSZN_MAIN');
        $sql = "SELECT * FROM `users` INNER JOIN `user_new_hash` ON `user_new_hash`.`user` = " . $this->argument('user_id') . " WHERE `id` = " . $this->argument('user_id');
        $user = $old_DB->query($sql)->fetch_assoc();

        if ($user['hash'] == '') {
            echo "Хеш пользователя не найден";
            return;
        }

        if (Main_User::where('id', $user['id'])->count() != 0) {
            echo "Пользователь уже существует";
            return;
        }

        try {
            Main_User::unguard();
            Main_User::create([
                'id' => $user['id'],
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
            echo "Пользователь добавлен";
        } catch (\Throwable $th) {
            dd($th);
        }
        Main_User::reguard();
    }
}
