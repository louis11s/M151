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
            ['name' => 'Blumentopf', 'price' => 29.30, 'text' => 'Ist ein guter Topf', 'usage' => 'Kann Blumen usw halten', 'image' => 'https://www.bauhaus.ch/product-images/65/51/23206551/1609377_23206551-696x696.jpg', ],
            ['name' => 'Gartenschlauch', 'price' => 50.60, 'text' => '50 Meter langer Schlauch', 'usage' => 'Kann Blumen tränken', 'image' => 'https://images-na.ssl-images-amazon.com/images/I/91te8ALPzAL._AC_SX425_.jpg', ],
            ['name' => 'Erde', 'price' => 15.00, 'text' => 'Kokosnusserde direkt von Hawaii', 'usage' => 'Bio natürliche Erde für Kräuter', 'image' => 'https://img.gartenjournal.net/wp-content/uploads/kokoserde-mit-blumenerde-mischen.jpg', ],
            ['name' => 'Samen', 'price' => 3.50, 'text' => 'Samen für Bananen', 'usage' => 'Einfacher anbau von Bananen', 'image' => 'https://dasgruenenetzwerk.de/wp-content/uploads/2012/10/banane-1.jpg', ],
            ['name' => 'Tulpen', 'price' => 7.50, 'text' => 'Wunderschöne Tulpen', 'usage' => 'Verschönerung von jedem Garten', 'image' => 'https://www.ndr.de/ratgeber/garten/zierpflanzen/tulpen242_v-quadratl.jpg', ],
            ['name' => 'Gartenhandschuhe', 'price' => 12.30, 'text' => 'Robuste Handschuhe für den Gartenbau', 'usage' => 'Schutz vor stichen und schnitten jenster Art', 'image' => 'https://images.stockx.com/images/Supreme-Grip-Work-Gloves-White.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1614568488', ],
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
