<?php namespace Rebel59\Blogtheming\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddThemeColumns extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->string('theme_color');
            $table->longText('theme_css');
        });
    }

    public function down()
    {
        Schema::table('rainlab_blog_categories', function(Blueprint $table) {
            $table->dropColumn('theme_color');
            $table->dropColumn('theme_css');
        });
    }
}
