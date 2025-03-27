<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "service_id"
    ];

    public function services()
    {
        return $this->belongsTo(Service::class);
    }
}
