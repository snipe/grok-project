<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{

    
    public function create(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->domains = $request->domains;
        $company->user_id = \Auth::user()->id;
        $company->save();

        return response($company->jsonSerialize(), 200);
    }



    public function destroy($id)
    {
        Company::destroy($id);
        return response(null, 200);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->name = $request->name;
        $company->domains = $request->domains;
        $company->user_id = \Auth::user()->id;
        $company->save();

        return response(null, 200);
    }

}
