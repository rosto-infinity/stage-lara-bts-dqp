<?php

namespace App\Http\Requests\Academic;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAcademicYearRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'libelle' => [
                'required',
                'string',
                'max:50',
                Rule::unique('academic_years','libelle')->ignore($this->academic_year->id),
            ],
            'date_debut' => ['required', 'date'],
            'date_fin' => ['required', 'date','after:date_debut'],
            'est_actif' => ['boolean'],
            //
        ];
    }
}
