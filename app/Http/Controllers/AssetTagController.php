<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetTagRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\asset;
use App\Models\AssetTag;

class AssetTagController extends Controller
{
    public function index()
    {
        $asset_tag = AssetTag::Latest()->with('asset')->get();
        return view('asset_tag.asset_tag_index', compact('asset_tag'));
    }

    public function create($id)
    {
        $asset = asset::where('id', $id)->get();
        return view('asset_tag.asset_tag_create', compact('asset'));
    }


    public function store(AssetTagRequest $request)
    {
        $asset_tag_data = new AssetTag();
        $asset_tag_data->serial_number = $request->input('serial_number');
        $asset_tag_data->asset_tag_number = $request->input('asset_tag_number');
        $asset_tag_data->other_information = $request->input('other_information');
        $asset_tag_data->status_id = '1';
        $asset_tag_data->purchase_price = $request->input('purchase_price');
        $asset_tag_data->asset_id = $request->asset_id;
        $asset_tag_data->created_by_id =  Auth::user()->id;
        $asset_tag_data->save();
        return redirect()->route('asset-tag.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $asset_tag = AssetTag::where('id', $id)->get();
        $asset = asset::where('id', $id)->get();
        return view('asset_tag.asset_tag_edit',compact('asset_tag', 'asset'));
    }


    public function update(AssetTagRequest $request)
    {
        $asset_tag_data = AssetTag::find($request->id);
        $asset_tag_data->serial_number = $request->input('serial_number');
        $asset_tag_data->asset_tag_number = $request->input('asset_tag_number');
        $asset_tag_data->other_information = $request->input('other_information');
        $asset_tag_data->purchase_price = $request->input('purchase_price');
        $asset_tag_data->updated_by_id =  Auth::user()->id;
        $asset_tag_data->save();
        return redirect()->route('asset-tag.index');
    }
}
