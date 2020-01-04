<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCosumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('consumerid')->unique();
            $table->string('name');
            $table->string('fathersName')->nullable();
            $table->string('mothersName')->nullable();
            $table->string('spouseName')->nullable();
            $table->string('houseNo')->nullable();
            $table->string('house')->nullable();
            $table->string('housing')->nullable();
            $table->string('streetName')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('pincode')->nullable();;
            $table->string('rationcard')->nullable();
            $table->string('email')->nullable();
            $table->string('scheme')->nullable();
            $table->string('bpltype')->nullable();
            $table->string('dcttype')->nullable();
            $table->string('optingstatus')->nullable();
            $table->string('subsidyquote_eligiblefor_currentyear')->nullable();
            $table->string('subsidyquote_delvfor_currentyear')->nullable();
            $table->string('kycdone')->nullable();
            $table->string('lpgid')->nullable();
            $table->string('lpgdistrict')->nullable();
            $table->string('lpgdistrictname')->nullable();
            $table->string('lpgsubdistrict')->nullable();
            $table->string('lpgsubdistrictname')->nullable();
            $table->string('lpgvillage')->nullable();
            $table->string('lpgvillagename')->nullable();
            $table->string('typeofmarket')->nullable();
            $table->string('address')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->string('areaId')->nullable();
            $table->string('areacodedescription')->nullable();
            $table->string('svdate')->nullable();
            $table->string('svnumber')->nullable();
            $table->string('category')->nullable();
            $table->string('productcode')->nullable();
            $table->string('noofcylinders')->nullable();
            $table->string('noofdprs')->nullable();
            $table->string('bluebooknumber')->nullable();
            $table->string('surakshatube')->nullable();
            $table->string('inspectiondate')->nullable();
            $table->string('typeofmarket2')->nullable();
            $table->string('historycode')->nullable();
            $table->string('connectiontype')->nullable();
            $table->string('consumertype')->nullable();
            $table->string('lastDeliveryDate')->nullable();
            $table->boolean('isactive')->default(1);
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
        Schema::dropIfExists('consumers');
    }
}
