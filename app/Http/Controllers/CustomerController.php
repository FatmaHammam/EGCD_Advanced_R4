<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
    public function index()
    {
        $data = "Fatma";
        return "Welcome $data";
    }

    // public function show()
    // {
    //     return view('form');
    // }

    public function create()
    {
        return view('customers.insert');
    }

    public function store(Request $request): RedirectResponse
    {

        $messages = [
            'name.required' => 'Name is required',
            'name.string' => 'Name Should be string',
            'email.required' => 'Email is required',
            'email.unique' => 'Email must be unique'
        ];
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:customers|max:255'
        ], $messages);

        $new_cust = new Customer();
        $new_cust->name = $request->name;
        $new_cust->email = $request->email;
        $new_cust->save();
        //return "Data Added Succ";
        return redirect('customer/All');
    }

    public function all_data()
    {
        $customers = Customer::get();                 //select * from customers
        return view('customers/all_data', compact("customers"));
    }
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        Customer::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('customer/All');
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        // $customer = Customer::findOrFail($id);
        // $customer->delete();
        Customer::where('id', $id)->delete();                //softdelete
        //Customer::where('id', $id)->forceDelete();              //force delete
        return redirect('customer/All');
    }

    public function showDeleted()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('customers.trashedCusts', compact('customers'));
    }

    public function restore(Request $request): RedirectResponse
    {
        $id = $request->id;
        Customer::where('id', $id)->restore();
        return redirect('customer/All');
    }
}
