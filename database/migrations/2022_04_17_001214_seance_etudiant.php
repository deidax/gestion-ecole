<?php

use App\Models\Etudiant;
use App\Models\Seance;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeanceEtudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seance_etudiant', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Seance::class);
            $table->foreignIdFor(Etudiant::class);
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
        //
    }
}
