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
            $table->string('name')->nullable();
            $table->string('organization')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('url')->nullable();
            $table->string('company_description')->nullable();
            $table->string('redesign_logo')->nullable();
            $table->string('design_theme')->nullable();
            $table->string('design_colors')->nullable();
            $table->string('design_lookandfeel')->nullable();
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
