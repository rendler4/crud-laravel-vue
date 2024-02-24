<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'hire_date' => 'date|string|max:255',
            'phone_number' => 'nullable|string|max:20',            
            'position' => 'required',            
            'department' => 'required',            
            'salary' => 'required',            
            // Agrega más reglas según tus necesidades
        ];
    }
}
