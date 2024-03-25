<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_nom_fr'); 
            $table->string('document_nom_en')->nullable(); 
            $table->string('document_path'); 
            $table->unsignedBigInteger('etudiant_id'); 
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->date('date_partage')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
