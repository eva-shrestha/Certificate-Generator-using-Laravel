<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $table = 'templates';

    protected $fillable = [
        'image', 'name_x', 'name_y', 'position_x', 'position_y', 'event_x', 'event_y', 'date_x', 'date_y',
    ];

    public function ceritificate_detail(){
        return $this->hasMany(CertificateDetail::class);
    }
}
