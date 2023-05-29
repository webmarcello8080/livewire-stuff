<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Illuminate\Container\Container;

class ProductSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
       
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('products')->insert([
                'title' => $this->faker->sentence(2),
                'brand' => $this->faker->name(),
                'description' => $this->faker->paragraph(),
                'price' =>  $this->faker->randomFloat('2', 0, 2),
                'featured' => $this->faker->boolean(),
                'created_at' => $this->faker->dateTimeThisMonth(),
            ]);
        }
    }
}
