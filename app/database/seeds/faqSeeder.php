<?php

	class FaqSeeder extends Seeder {

    public function run()
    {
        //DB::table('users')->delete();

        //User::create(array('email' => 'foo@bar.com'));
        Sitesetting::create(['faq'=>'Faq goes here']);
        User::create(['username'=>'faiths','password'=>Hash::make('green36')]);
    }
}
