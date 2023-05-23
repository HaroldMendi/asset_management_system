<?php

namespace App\Models;
use App\Models\AssetTag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    public function assettag(){
        return $this->hasMany(AssetTag::class, 'status_id');
    }
    
}
