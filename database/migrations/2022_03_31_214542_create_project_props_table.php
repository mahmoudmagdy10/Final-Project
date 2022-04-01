<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectPropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_props', function (Blueprint $table) {
            $table->increments('id');
            $table->double('PREDICTION');
            $table->string('OverallQual',100);
            $table->string('Neighborhood',100);
            $table->integer('GrLivArea');
            $table->integer('GarageCars');
            $table->string('BsmtQual',100);
            $table->string('ExterQual',100);
            $table->integer('GarageArea');
            $table->string('KitchenQual',100);
            $table->integer('YearBuilt');
            $table->integer('TotalBsmtSF');
            $table->integer('FirstFlrSF');
            $table->string('GarageFinish',100);
            $table->integer('FullBath');
            $table->integer('YearRemodAdd');
            $table->string('GarageType',100);
            $table->string('FireplaceQu',100);
            $table->string('Foundation',100);
            $table->string('MSSubClass',100);
            $table->integer('TotRmsAbvGrd');
            $table->integer('Fireplaces');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_props');
    }
}
