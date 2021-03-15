<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class RacingsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'distance'  => ['required',Rule::In(array_keys(Racing::DISTANCES))],
            'date'      => 'required|date_format:Y-m-d|after_or_equal:'.Carbon::now()->format('Y-m-d'),
        ];
    }
}
