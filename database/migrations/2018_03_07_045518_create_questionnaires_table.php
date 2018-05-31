<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('organization');
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->string('url');
            $table->string('company_description');
            $table->string('redesign_logo');
            $table->string('design_theme');
            $table->string('design_colors');
            $table->string('design_lookandfeel');
            $table->text('design_ref')->nullable();
            $table->text('target_audience_info')->nullable();
            $table->text('feature')->nullable();
            $table->text('web_app')->nullable();
            $table->string('in_charge')->nullable();
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
        Schema::dropIfExists('questionnaires');
    }
}
