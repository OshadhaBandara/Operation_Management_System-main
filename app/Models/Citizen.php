<?php

namespace App\Models;
use App\Models\Service;
use App\Models\Document;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Citizen extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->hasMany(Service::class, 'citizen_id', 'id');
    }

    public function documents()
 
    {
        return $this->hasOne(Document::class, 'citizen_id', 'id');
    }
}
