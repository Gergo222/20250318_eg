<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "capacity"
    ];

    public function cars()
    {
        return $this->hasMany("cars", "service_id", "id");
    }

    public function mechanics()
    {
        return $this->hasMany("mechanics", "service_id", "id");
    }
}
