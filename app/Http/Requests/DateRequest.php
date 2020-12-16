<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\Request;

class DateRequest extends Request
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
        $date=date_create(date("m/d/Y")); 
        date_add($date,date_interval_create_from_date_string("4 days"));
        $dateafter=date_format($date,"m/d/Y");
        return [
            //
            'phone_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Full_name'=>'required',
            'trip_date'=>'required|after_or_equal:'.$dateafter,
        ];
    }
}