<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Fruit;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		// $this->call('UserTableSeeder');
		$this->call('FruitTableSeeder');
        $this->call('UserTableSeeder');
	}

}

class FruitTableSeeder  extends Seeder {
    public function run() {
        DB::table('fruits')->delete();

        $fruits = [
            [   "name" => 'Mango',
                "color" => 'Orange',
                "taste" => 'Sweet',  ],
            [   "name" => 'Lime',
                "color" => 'Lime',
                "taste" => 'Sour',  ]
        ];

        foreach ($fruits as $s ) {
            Fruit::create($s);     
        } 

    }
}

class UserTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Piyapan Rodkuen',
            'username' => 'rayspic',
            'email'    => 'piyapannr@gmail.com',
            'password' => Hash::make('softdef'),
        ));
    }
}