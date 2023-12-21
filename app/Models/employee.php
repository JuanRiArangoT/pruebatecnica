<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    private static $instance;

    // Atributos específicos de la clase Employee
    protected $table = 'employee'; // Nombre de la tabla en la base de datos
    protected $fillable = ['dni', 'dni_type', 'first_name', 'last_name', 'blood_type']; // Campos permitidos para asignación masiva



    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getDni_type(){
        return $this->dni_type;
    }

}

