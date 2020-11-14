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
    }
}
