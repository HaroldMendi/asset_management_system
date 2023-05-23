<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetRequest;
use App\Http\Requests\CreateAssetRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Asset;
use App\Models\User;
use App\Models\Type;
use Illuminate\View\View;


class AssetController extends Controller
{
    public function index(): View
    {
        $assets = Asset::query()->Latest()->get();

        return view('asset.asset_index', compact('assets'));
    }

    public function create(): View
    {
        $types = Type::all();

        return view('asset.asset_create', compact('types'));
    }

    public function store(CreateAssetRequest $request): RedirectResponse
    {
        $asset = new asset();
        $asset->brand_id = $request->input('brand_id');
        $asset->model_id = $request->input('model_id');
        $asset->type_id = $request->input('type_id');
        $asset->created_by_id =  Auth::id();

        $asset->save();

        return redirect()->route('asset.index');
    }

    public function show($id)
    {

    }

    public function edit($id): View
    {
        $assets = Asset::query()->where('id', $id)->get();

        $types = Type::all();

        return view('asset.asset_edit',compact('assets', 'types'));
    }


    public function update(AssetRequest $request): RedirectResponse
    {
        $asset = Asset::query()->find($request->id);
        $asset->brand = $request->input('brand');
        $asset->model = $request->input('model');
        $asset->type_id = $request->input('type_id');
        $asset->updated_by_id =  Auth::user()->id;
        $asset->save();

        return redirect()->route('asset.index');
    }
}
