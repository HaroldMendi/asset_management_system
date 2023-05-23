<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\asset;
use App\Models\User;
use App\Models\Type;


class AssetController extends Controller
{
   
    public function index()
    {
        $assets = asset::Latest()->get();
        return view('asset.asset_index', compact('assets'));
    }

   
    public function create()
    {
        $types = Type::all();
        return view('asset.asset_create', compact('types'));
    }


    public function store(AssetRequest $request)
    {
        $asset = new asset();
        $asset->brand = $request->input('brand');
        $asset->model = $request->input('model');
        $asset->type_id = $request->input('type_id');
        $asset->created_by_id =  Auth::user()->id;
        $asset->save();
        return redirect()->route('asset.index');
    }


    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $assets = asset::where('id', $id)->get();
        $types = Type::all();
        return view('asset.asset_edit',compact('assets', 'types'));
    }


    public function update(AssetRequest $request)
    {
        $asset = asset::find($request->id);
        $asset->brand = $request->input('brand');
        $asset->model = $request->input('model');
        $asset->type_id = $request->input('type_id');
        $asset->updated_by_id =  Auth::user()->id;
        $asset->save();
        return redirect()->route('asset.index');
    }

 
}
