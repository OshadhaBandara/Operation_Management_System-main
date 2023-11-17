<?php

namespace App\Models;
use App\Models\Citizen;
use App\Models\Payment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class, 'citizen_id', 'id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class, 'service_id', 'id');
    }
}
