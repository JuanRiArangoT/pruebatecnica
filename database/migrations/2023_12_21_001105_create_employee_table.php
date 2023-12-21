<?php

// database/migrations/xxxx_xx_xx_create_employees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Esto crea automáticamente un campo "id" autoincremental
            $table->string('dni')->unique();
            $table->string('dni_type');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('date_born');
            $table->string('telephone');
            $table->string('blood_type');
            $table->text('address');
            $table->text('contact');
            $table->timestamps();
            $table->boolean('status')->default(true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
