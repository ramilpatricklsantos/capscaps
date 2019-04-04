<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            - use the schema builder to create a 'categories' table with the ff. columns and their respective data types:
                - 'id' column, data type integer that auto-increments
                - 'name' column, data type string
                - 'description' column, data type string that is nullable
                - 'status' column, data type char with a default value of '1'
                - use the softDeletes method of $table
                - use the timestamps method of $table
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
