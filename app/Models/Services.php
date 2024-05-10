<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailServices;

class Services extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function detailservices()
    {
        return $this->hasMany(DetailServices::class, 'id_services');
    }

    public function detailsliderservices()
    {
        return $this->hasMany(DetailServices::class, 'id_services');
    }
}
