<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Note;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $industries = ['automobile', 'clothing', 'food services', 'mining', 'transport'];
    public function index()
    {
        $companies = Company::all();
        return view('companies.index')->with('companies', $companies);
    }

    public function show($id)
    {
        $noteTypes = ['comment', 'rating', 'report'];
        $notes = Note::all();
        $company = Company::find($id);
        return view('companies.show')->with('company', $company)->with('noteTypes', $noteTypes)->with('notes', $notes);
    }

    public function create(){
        return view('companies.create')->with('industries', $this->industries);
    }
    public function store(Request $request)
    {
        $company = new Company;
        $company->name = $request->input('name');
        $company->NIP = $request->input('nip');
        $company->zip_code = $request->input('zip_code');
        $company->street = $request->input('street');
        $company->city = $request->input('city');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->industry = $request->input('industry');
        $company->save();
        return view('companies.create')->with('industries', $this->industries);
    }
    public function edit($id){
        $company = Company::find($id);
        return view('companies.edit')->with('company',$company)->with('industries', $this->industries);
    }
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $companies = Company::all();
        $company->name = $request->input('name');
        $company->NIP = $request->input('nip');
        $company->zip_code = $request->input('zip_code');
        $company->street = $request->input('street');
        $company->city = $request->input('city');
        $company->phone = $request->input('phone');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->industry = $request->input('industry');
        $company->save();
        return redirect('/companies');
    }
}
