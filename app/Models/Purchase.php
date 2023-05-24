<?php

namespace App\Models;
use App\Models\Asset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    public function purchaseData() {
        return $this->hasMany(Asset::class, 'purchase_id');
    }
}  
