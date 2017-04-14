<?php

namespace App\Http\Requests\Backend\Exams;

use App\Http\Requests\Request;

/**
 * Class CountryRequest.
 */
class ExamRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO
        return access()->allow('manage-users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // TODO
        return [
            //
        ];
    }
}
