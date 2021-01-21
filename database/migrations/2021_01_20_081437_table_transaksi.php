<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbursement', function(Blueprint $table){
            $table->id('id_reim');
            $table->bigInteger('nip');
            $table->dateTime('tanggal_waktu_reim');
            $table->string('subjek_reim');
            $table->integer('total_reim');
            $table->boolean('status_hr');
            $table->boolean('status_finance');
            $table->text('catatan')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });
        
        Schema::create('detail_reimbursement', function(Blueprint $table){
            $table->id('id_detail_reim');
            $table->bigInteger('id_reim');
            $table->dateTime('tanggal_waktu_bukti_detail_reim');
            $table->bigInteger('id_kategori');
            $table->text('bukti_detail_reim');
            $table->integer('jumlah_detail_reim');
            $table->text('deskripsi_detail_reim')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });

        Schema::create('tracking_reimbursement', function(Blueprint $table){
            $table->id('id_tracking');
            $table->bigInteger('id_reim');
            $table->bigInteger('id_status');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });

        Schema::create('pengembalian_reimbursement', function(Blueprint $table){
            $table->id('id_pengembalian');
            $table->bigInteger('id_reim');
            $table->dateTime('tanggal_waktu_pengembalian');
            $table->integer('total_pengembalian');
            $table->string('cara_pengembalian');
            $table->string('tujuan_pengembalian');
            $table->text('deskripsi_pengembalian')->nullable();
            $table->bigInteger('nip');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reimbursement');
        Schema::drop('detail_reimbursement');
        Schema::drop('tracking_reimbursement');
        Schema::drop('pengembalian_reimbursement');
    }
}
