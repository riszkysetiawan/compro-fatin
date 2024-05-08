<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSlider extends Model
{
    use HasFactory;
    protected $table = 'banner_slider';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
