<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('confirms', 'status'))
        {
            Schema::table('confirms', function(Blueprint $table)
            {
                $table->string('status');
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
        if (Schema::hasColumn('confirms', 'status'))
        {
            Schema::table('confirms', function(Blueprint $table)
            {
                $table->dropColumn('status');
            });
        }
    }
}
