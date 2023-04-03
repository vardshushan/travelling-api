<?php

namespace App\Services;


use App\Models\Company;

class CompanyService
{
    public function create($data)
    {
        return Company::create($data);
    }


    public function update($data, $id)
    {
        Company::where('id', $id)->update($data);
        return Company::where('id', $id)->first();
    }

    public function delete($id)
    {
        return Company::where('id', $id)->delete();
    }
}
