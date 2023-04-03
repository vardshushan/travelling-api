<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CompanyRequest;
use App\Models\Company;
use App\Services\CompanyService;

class CompanyController extends Controller
{
    public function getAllCompanies()
    {
        return Company::all();
    }

    public function createCompany(CompanyRequest $request, CompanyService $service)
    {
        $validatedData = $request->validated();
        return $service->create($validatedData);
    }

    public function updateCompany(CompanyRequest $request, CompanyService $service, $id)
    {
        $validatedData = $request->validated();
        return $service->update($validatedData, $id);
    }

    public function deleteCompany(CompanyService $service, $id)
    {
        return $service->delete($id);
    }
}
