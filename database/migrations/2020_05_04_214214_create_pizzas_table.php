<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('Pizza_name',191);
            $table->string('Pizza_price');
        });
        DB::table('pizzas')->insert([
            ['Pizza_name' => 'PIZZA 1', 'Pizza_price' => '10'],
            ['Pizza_name' => 'PIZZA 2', 'Pizza_price' => '20'],
            ['Pizza_name' => 'PIZZA 3', 'Pizza_price' => '30'],
            ['Pizza_name' => 'PIZZA 4', 'Pizza_price' => '40'],
            ['Pizza_name' => 'PIZZA 5', 'Pizza_price' => '50'],
            ['Pizza_name' => 'PIZZA 6', 'Pizza_price' => '60'],
            ['Pizza_name' => 'PIZZA 7', 'Pizza_price' => '70'],
            ['Pizza_name' => 'PIZZA 8', 'Pizza_price' => '80'],
          
            
            
            
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
}
