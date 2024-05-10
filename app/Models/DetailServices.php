<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;

class DetailServices extends Model
{
    use HasFactory;
    protected $table = 'detail_service';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function service()
    {
        return $this->belongsTo(Services::class, 'id_services');
    }
}
