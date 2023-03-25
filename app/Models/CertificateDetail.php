<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateDetail extends Model
{
    use HasFactory;

    protected $table = 'certificate_details';

    protected $fillable = [
        'template_id', 'name', 'position', 'event', 'date',
    ];

    public function ceritificate_detail(){
        return $this->belongsTo(Template::class);
    }
}
