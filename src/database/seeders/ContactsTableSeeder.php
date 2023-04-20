<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => '田中一郎',
            'gender' => 1,
            'email' => 'test@example.com',
            'mail' => 123-4567,
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'build' => '千駄ヶ谷マンション101',
            'opinion' => 'いつもお世話になっております。'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'fullname' => '鈴木さくら',
            'gender' => 2,
            'email' => 'tete@example.com',
            'mail' => 987-6543,
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'build' => '千駄ヶ谷マンション104',
            'opinion' => '貴社製品にいつもお世話になっております。'
        ];
        DB::table('contacts')->insert($param);

        Contact::factory()->count(33)->create();
    }
}
