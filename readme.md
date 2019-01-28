# Laravel pagination example

## clone this repository and run `setup.sh`
`setup.sh` creates a new sqlite database and runs the migrations.

## fake data
some fake data is in `DatabaseSeeder` class as:
```php

public function run()
{
    $faker = Faker::create();
    foreach (range(1,1000) as $index) {
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
        ]);
    }
}
```
