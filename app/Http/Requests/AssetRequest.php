<?php

namespace App\Http\Requests;
use App\Models\asset;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
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

        if (request()->routeIs('asset.store')){
            $model = 'required';
            
        }elseif(request()->routeIs('asset.update')){
            $model = 'sometimes';
        }


        return [
           'brand' => ['required'],
           'model' => [$model]
        ];
    }

    protected function prepareForValidation()
    {
        if($this->model == null) {
            $this->request->remove('model');
        } 
    }
}
