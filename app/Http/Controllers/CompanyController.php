<?php

namespace App\Http\Controllers;

use App\Models\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $company = Company::paginate(10);
        return view('companies.index')->with(
            [
                'companies'=>$company,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'logo' => 'required|mimes:jpg,png,jpeg',
            'website'=> 'required',
        ]);
        $input = $request->all();
        if($request->hasFile('logo')){
            $destination_path = 'public/images/logos';
            $logo = $request->file('logo');
            $logo_name = $logo->getClientOriginalName();
            $path = $request->file('logo')->storeAs($destination_path,$logo_name);
            $input['logo'] = $logo_name;
        }
        $company = Company::create($input);
        return redirect()->route('companies.index')
                    ->withSuccess("You have successfully created new Company \"{$company->name} \" Information ");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show')->with([
            'company'=>$company,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit')->with([
           'company' => $company, 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'logo' => 'required|mimes:jpg,png,jpeg|min:100',
            'website'=> 'required',
        ]);
        $input = $request->all();
        if($request->hasFile('logo')){
            $destination_path = 'public/images';
            $logo = $request->file('logo');
            $logo_name = $logo->getClientOriginalName();
            $path = $request->file('logo')->storeAs($destination_path,$logo_name);
            $input['logo'] = $logo_name;
        }
        $company->update($request->all());
        return redirect()->route('companies.index')
                    ->withSuccess("You have Successfully updated company information for \" {$company->name} \" ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        
        $company->delete();
        return redirect()->route('companies.index')
                        ->withSuccess("You have successfully deleted the company");
    }
}