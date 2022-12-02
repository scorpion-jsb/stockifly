<?php

use App\Models\PaymentMode;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_modes', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->timestamps();
		});

		$paymentMode = new PaymentMode();
		$paymentMode->name = "Cash";
		$paymentMode->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('payment_modes');
	}
}
