<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = '7csn';
        $user->email = '1479672753@qq.com';
        $user->is_admin = true;
        $user->save();

        $user = User::find(2);
        $user->name = 'chenda';
        $user->email = '747472991@qq.com';
        $user->is_admin = true;
        $user->password = bcrypt('ksxg4444');
        $user->save();
    }
}
