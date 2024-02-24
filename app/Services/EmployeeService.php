<?php
namespace App\Services;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
class EmployeeService
{
    public function getAllEmployees()
    {
        return Employee::all();
    }

    public function createEmployee(EmployeeRequest $request)
    {
        $validatedData = $request->validated();
        return Employee::create($validatedData);
    }

    public function getEmployeeById($id)
    {
        return Employee::findOrFail($id);
    }

    public function updateEmployee($id, $data)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($data);
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
    }
}
