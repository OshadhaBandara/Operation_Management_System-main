<?php

namespace App\Models;
use App\Models\Citizen;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    
    protected $guarded =[];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class, 'citizen_id', 'id');
    }

}
