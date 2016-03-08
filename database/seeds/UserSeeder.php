<?php
/**
 * @author İsmail Atkurt <ismail.atkurt@gmail.com>
 * 08/03/16
 * 20:34
 */

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'İsmail Atkurt',
                'email' => 'ismail.atkurt@gmail.com',
                'password' => 'Türkçe'
            ]
        );
    }
}
