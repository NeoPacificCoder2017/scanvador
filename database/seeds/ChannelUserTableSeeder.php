<?php

use Illuminate\Database\Seeder;
use App\ChannelUser;
class ChannelUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channelUsers = [];

        for($i = 0; $i < 10; $i++):
            $channelId = rand(1, 10);
            $userId = rand(1, 10);

            $channelUsers[] = [
                'channel_id' => $channelId,
                'user_id' => $userId,
            ];

        endfor;

        foreach($channelUsers as $channelUser):
            ChannelUser::create($channelUser);
        endforeach;
    }
}
