<?php

namespace App\Models;
use App\Models\asset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    protected $table = 'types';

    public function asset(){
        return $this->hasMany(asset::class, 'type_id');
    }
}
