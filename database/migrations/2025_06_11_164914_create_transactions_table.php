<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('mobil_id')->constrained()->onDelete('cascade');
            $table->date('rental_date');
            $table->date('return_date');
            $table->decimal('total_price', 10, 2);
            $table->enum('payment_method', ['cash', 'm-banking', 'e-wallet']);
            $table->enum('status', ['tersewa', 'selesai', 'batal'])->default('tersewa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
