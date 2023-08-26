<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aufgaben extends Model
{
    protected $table = 'todos';
    protected $fillable = ['name', 'description', 'done_until'];
    
    public static function erstelleAufgabe($name, $description, $done_until)
    {
        return self::create([
            'name' => $name,
            'description' => $description,
            'done_until' => $done_until,
        ]);
    }
    
    public function aktualisiereAufgabe($name, $description, $done_until)
    {
        $this->update([
            'name' => $name,
            'description' => $description,
            'done_until' => $done_until,
        ]);
        return $this;
    }
    
}
