<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatacustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('customers', 'telp'))
        {
            Schema::table('customers', function(Blueprint $table)
            {
                $table->string('telp');
            });
        }

        if (!Schema::hasColumn('customers', 'add'))
        {
            Schema::table('customers', function(Blueprint $table)
            {
                $table->string('add');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('customers', 'telp'))
        {
            Schema::table('customers', function(Blueprint $table)
            {
                $table->dropColumn('telp');
            });
        }

        if (Schema::hasColumn('customers', 'add'))
        {
            Schema::table('customers', function(Blueprint $table)
            {
                $table->dropColumn('add');
            });
        }
    }
}
