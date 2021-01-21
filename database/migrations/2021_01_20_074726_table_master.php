<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan', function(Blueprint $table){
            $table->id('id_jabatan');
            $table->string('jabatan');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });

        Schema::create('kategori', function(Blueprint $table){
            $table->id('id_kategori');
            $table->string('kategori');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });

        Schema::create('status_reimbursement', function(Blueprint $table){
            $table->id('id_status');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');
        });

        Schema::create('karyawan', function(Blueprint $table){
            $table->bigInteger('nip')->primary();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->foreignId('id_jabatan');
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
        Schema::drop('jabatan');
        Schema::drop('kategori');
        Schema::drop('status_reimbursement');
        Schema::drop('karyawan');
    }
}
