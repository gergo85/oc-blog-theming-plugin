<?php namespace Rebel59\Blogthemes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddThemeColumns extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->string('color');
            $table->longText('css');
        });
    }

    public function down()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->dropColumn('color');
            $table->dropColumn('css');
        });
    }
}
