<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicForm extends FormRequest
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
            'title' => 'required|min:3',
            'price' => 'required|numeric|between:0,99.99',
            'sale_date' => 'date',
        ];
    }

    public function messages()
    {
      return [
          'title.required' => 'Il Titolo è un campo obbligatorio',
          'title.min' => 'Il Titolo deve essere lungo almeno :min caratteri',
          'price.required' => 'Il Prezzo è un campo obbligatorio',
          'price.numeric' => 'Il Prezzo deve essere un numero',
          'price.between' => 'Il Prezzo deve essere compreso tra 0 e 99.99',
          'sale_date.date' => 'La Data deve essere una data nel formato YYYY-MM-DD'
      ];
    }
}
