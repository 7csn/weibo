<?php

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        $statuses = factory(Status::class)->times(100)->create();
    }
}
