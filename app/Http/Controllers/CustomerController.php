<?php

namespace SigAtelie\Http\Controllers;


use Illuminate\Http\Request;
use SigAtelie\Entities\Customer;
use SigAtelie\Http\Requests;

class CustomerController extends Controller
{


    public function index()
    {
        $customers = Customer::all();

        return view('customer.index')->with("customers", $customers);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('customer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @return IlluminateHttpResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
        ]);

        $customer = new Customer;

        $customer->create($request->all());
        return redirect('customers')->with('message','Updated customer');
    }


    public function show($id)
    {
        $customer = Customer::find($id);

        // return to 404 page
        if(!$customer){
            abort(404);
        }

        return view('customer.detail')->with('customer',$customer);
    }

    public function edit($id)
    {
        // edit function here
        $customer = Customer::find($id);

        // return to 404 page
        if(!$customer){
            abort(404);
        }
        // display the article to single page
        return view('customer.edit')->with('customer',$customer);
    }

    public function update(Request $request, $id)
    {
        // we will create validation function here
        $this->validate($request,[
            'name'=> 'required',

        ]);

        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->cpf = $request->cpf;
        // save all data
        $customer->save();

        //redirect page after save data
        return redirect('customers')->with('message','Updated customer.');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customers')->with('message','Removed Customer.');
    }
}
