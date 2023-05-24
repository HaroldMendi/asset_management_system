<?php

namespace App\Models;
use App\Models\Asset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    public function brandName() {
        return $this->hasMany(Asset::class, 'brand_id');
    }
}
