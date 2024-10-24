<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('image');
            $table->timestamps();
        });

        $faker = Faker\Factory::create();

        $locations = [
            [
                'code' => rand(1, 100),
                'name' => $faker->name,
                'image' => 'https://images.unsplash.com/photo-1573484571244-8a629b6cc8f9?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            [
                'code' => rand(1, 100),
                'name' => $faker->name,
                'image' => 'https://images.unsplash.com/photo-1573484571244-8a629b6cc8f9?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            [
                'code' => rand(1, 100),
                'name' => $faker->name,
                'image' => 'https://images.unsplash.com/photo-1573484571244-8a629b6cc8f9?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            [
                'code' => rand(1, 100),
                'name' => $faker->name,
                'image' => 'https://images.unsplash.com/photo-1573484571244-8a629b6cc8f9?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
        ];
        foreach ($locations as $location) {
            \App\Models\Location::create([
                'code' => $location['code'],
                'name' => $location['name'],
                'image' => $location['image'],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
