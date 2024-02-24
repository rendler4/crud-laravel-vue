<?php


namespace App\Http\Controllers;

use App\Services\EmployeeService;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    private $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAllEmployees();
        return Inertia::render('Employees/Index', [
            'employees' => $employees,
        ]);
    }

    public function create()
    {
        return Inertia::render('Employees/Create');
    }

    public function store(EmployeeRequest $request)
    {
        $this->employeeService->createEmployee($request);
        return redirect()->route('employees.index');
    }

    public function show($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return Inertia::render('Employees/Show', [
            'employee' => $employee,
        ]);
    }

    public function edit($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return Inertia::render('Employees/Edit', [
            'employee' => $employee,
        ]);
    }

    public function update(EmployeeRequest $request, $id)
    {
        $this->employeeService->updateEmployee($id, $request);
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $this->employeeService->deleteEmployee($id);
        return redirect()->route('employees.index');
    }
}
