<?php

namespace App\Http\Requests;
use App\Models\AssetTag;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class AssetTagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // if (request()->routeIs('asset-tag.store')){
        //     $serial_number_store = ['required'];
        //     $asset_tag_number_store = ['required'];
        //     $purchase_price_store = ['required'];
            
        // }elseif(request()->routeIs('asset-tag.update')){
        //     $serial_number_update = ['required'];
        //     $asset_tag_number_update = ['required'];
        //     $purchase_price_update = ['required'];
        // }

        return [
            // //STORE
            // 'serial_number' => [$serial_number_store, Rule::unique('AssetTag')],
            // 'asset_tag_number' => [$asset_tag_number_store, Rule::unique('AssetTag')],
            // 'purchase_price' => [$purchase_price_store,'integer'],

            // //UPDATE
            // 'serial_number' => [$serial_number_update, Rule::unique('AssetTag')->ignore($AssetTag->id)],
            // 'asset_tag_number' => [$asset_tag_number_update, Rule::unique('AssetTag')],
            // 'purchase_price' => [$purchase_price_update,'integer'],

            'serial_number' =>  ['required',Rule::unique('AssetTag')->ignore($this->request->get('id'))],
            'asset_tag_number' =>  ['required',Rule::unique('AssetTag')->ignore($this->request->get('id'))],
        ];
    }
}
