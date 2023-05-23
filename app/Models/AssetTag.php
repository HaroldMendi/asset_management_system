<?php

namespace App\Models;
use App\Models\asset;
use App\Models\Status;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetTag extends Model

{
    use HasFactory;
    protected $table = 'assettag';
    protected $fillable = [
        'serial_number',
        'asset_tag_number',
        'other_information',
        'status_id',
        'purchase_price',
        'asset_id',
        'created_by_id',
    ];

    public function asset(){
        return $this->belongsTo(asset::class, 'asset_id', 'id');
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }


}
