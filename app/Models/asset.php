<?php

namespace App\Models;
use App\Models\User;
use App\Models\Type;
use App\Models\AssetTag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;

    protected $table = 'asset';

    public function user(){
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function type() {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function AssetTag() {
        return $this->hasMany(AssetTag::class, 'asset_id');
    }

}
