<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BidController extends Controller
{

    public function user_currentbidding() 
    {
       
        $data = array("bids" => DB::table('bids')->orderBy('id', 'asc')->simplePaginate(10));
        return view('bids.user_currentbidding', $data);
    }

    public function admin_currentbidding() 
    {
       
        $data = array("bids" => DB::table('bids')->orderBy('id', 'asc')->simplePaginate(10));
        return view('bids.admin_currentbidding', $data);
    }

    public function show($id){
        $data = Bid::findOrFail($id);
        return view('bids.edit', ['bid' => $data]);
    }

    public function create(){
        return view('bids.create')->with('title', 'Add New');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "user_name" => ['required', 'min:4'],
            "bid" => ['required', 'min:8'],
        ]);


        $bid = new Bid();
        $bid->user_name = $validated['user_name']; 
        $bid->bid = $validated['bid'];
        $bid->save();

        
        Bid::create($validated);

        return redirect('admin_currentbidding')->with('message', 'New Bid was added successfully!');

    }

    public function update(Request $request, Bid $bid){

        $validated = $request->validate([
            "user_name" => ['required', 'min:4'],
            "bid" => ['required', 'min:8'],
        ]);


        
        $bid->user_name = $validated['user_name']; 
        $bid->bid = $validated['bid'];
        $bid->update();


        $bid->update($validated);

        // return back()->with('message', 'Data was successfully updated');
        return redirect('admin_currentbidding')->with('message', 'Data was successfully updated');
        
    }

    public function destroy(Bid $bid){
        $bid->delete();
        return redirect('admin_currentbidding')->with('message', 'Data was successfully deleted');
    }



}
