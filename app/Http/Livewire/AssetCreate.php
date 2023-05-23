<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\asset;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class AssetCreate extends Component
{
    public $brand;
    public $model;
    public $type_id;

    public $rules = [
        'brand' => [
            'required',
            'min:3',
            'max:20',
        ],
        'model' => [
            'required',
            'min:3',
            'max:20',
        ],
        'type_id' => [
            'required',
        ],
    ];

    public function AddAsset()
    {
        $this->validate();
        $asset = new asset();
        $asset->brand = $this->brand;
        $asset->model = $this->model;
        $asset->type_id = $this->type_id;
        $asset->created_by_id =  Auth::user()->id;
        $asset->save();

        $this->resetForm();

        session()->flash('success', 'Asset successfully created!');
    }

    public function resetForm()
    {
        $this->brand = '';
        $this->model = '';
        $this->type_id = '';
    }

    public function render()
    {
        $options = Type::all();
        return view('livewire.asset-create', compact('options'));
    }
}
