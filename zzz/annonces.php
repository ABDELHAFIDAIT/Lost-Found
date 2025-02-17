<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('photo');
            $table->date('date');
            $table->string('lieu');
            $table->enum('status',['accepté','en attente','refusé'])->default('en attente');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_category')->references('id')->on('categories')->onDelete(action: 'set null')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('annonces');
    }
};



// The different types of actions for onDelete are:
// 'cascade' - Delete the related records in the child table when the parent record is deleted.
// 'restrict' - Prevent the deletion of the parent record if it has related records in the child table.
// 'set null' - Set the foreign key column in the child table to null when the parent record is deleted.
// 'no action' - Do nothing when the parent record is deleted.