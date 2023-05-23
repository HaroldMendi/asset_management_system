<?php

namespace App\Models;
use App\Models\User;
use App\Models\Type;
use App\Models\AssetTag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'asset';

    const STATUS_AVAILABLE = 'available';
    const STATUS_DISPOSED = 'disposed';

    public function creator(){
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function type() {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function AssetTag() {
        return $this->hasMany(AssetTag::class, 'asset_id');
    }

}
