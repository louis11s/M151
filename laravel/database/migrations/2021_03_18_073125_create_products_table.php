<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('text');
            $table->string('image');
            $table->string('usage');
            $table->integer('price');
        });
        DB::table('products')->insert([
            ['name' => 'Blumentopf', 'price' => 29.3, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'Blumentopf', ],
            ['name' => 'Gartenschlauch', 'price' => 29.3, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'Blumentopf', ],
            ['name' => 'Erde', 'price' => 29.3, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'Blumentopf', ],
            ['name' => 'Samen', 'price' => 29.3, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'Blumentopf', ],
            ['name' => 'Tulpen', 'price' => 29.3, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'Blumentopf', ],
            ['name' => 'Gartenhandschuhe', 'price' => 29.3, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'Blumentopf', ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
