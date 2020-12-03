<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDangKyHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ky_hocs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('topic_id');
            $table->integer('trang_thai')->default(0);
            $table->date('ngay_hoan_thanh')->nullable();
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
        Schema::dropIfExists('dang_ky_hocs');
    }
}
