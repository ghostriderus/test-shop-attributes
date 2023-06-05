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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->timestamps();
        });
		
        Schema::create('products', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
		
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
			$table->string('value');
            $table->timestamps();
        });
		
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
			$table->unsignedTinyInteger('value');
            $table->timestamps();
        });
		
        Schema::create('skus', function (Blueprint $table) {
            $table->id();
			$table->foreignId('product_id')->constrained();
			$table->foreignId('color_id')->constrained();
			$table->foreignId('size_id')->constrained();
			$table->unsignedSmallInteger('quantity');
			$table->unsignedSmallInteger('price');
            $table->timestamps();
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('skus', function (Blueprint $table) {
			$table->dropForeign(['product_id']);
			$table->dropForeign(['color_id']);
			$table->dropForeign(['size_id']);
		});
		Schema::table('products', function (Blueprint $table) {
			$table->dropForeign(['category_id']);
		});
        Schema::dropIfExists('sizes');
        Schema::dropIfExists('colors');
        Schema::dropIfExists('skus');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
}
