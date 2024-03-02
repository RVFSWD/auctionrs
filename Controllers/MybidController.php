<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Mybid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

// class MybidController extends Controller
// {
    

//     public function user_currentbidding() 
//     {
       
//         $data = array("bids" => DB::table('bids')->orderBy('id', 'asc')->simplePaginate(10));
//         return view('bids.user_currentbidding', $data);
//     }

//     public function admin_currentbidding() 
//     {
       
//         $data = array("bids" => DB::table('bids')->orderBy('id', 'asc')->simplePaginate(10));
//         return view('bids.admin_currentbidding', $data);
//     }

//     public function show($id){
//         $data = Mybid::findOrFail($id);
//         return view('bids.bid_edit', ['bid' => $data]);
//     }

//     public function bidding01(){
//         return view('bids.bidding01')->with('Save', 'Place your Bid');
//     }

//     public function store(Request $request){
//         $validated = $request->validate([
//             "full_name" => ['required', 'min:4'],
//             "user_name" => ['required', 'min:4'],
//             "bid" => ['required', 'min:8'],
//             "gender" => ['required'],
//             "age" => ['required'],
//             "email" => ['required', 'email', Rule::unique('users', 'email')],
//         ]);


//         $bid = new Bid();
//         $bid->full_name = $validated['full_name'];
//         $bid->user_name = $validated['user_name']; 
//         $bid->bid = $validated['bid'];
//         $bid->gender = $validated['gender'];
//         $bid->age = $validated['age'];
//         $bid->email = $validated['email'];
//         $bid->save();

        
//         Bid::bidding01($validated);

//         return redirect('bidding01')->with('message', 'New Bid was added successfully!');

//     }

//     public function update(Request $request, Bid $bid){

//         $validated = $request->validate([
//             "full_name" => ['required', 'min:4'],
//             "user_name" => ['required', 'min:4'],
//             "bid" => ['required', 'min:8'],
//             "gender" => ['required'],
//             "age" => ['required'],
//             "email" => ['required', 'email'],
//         ]);


//         $bid->full_name = $validated['full_name'];
//         $bid->user_name = $validated['user_name']; 
//         $bid->bid = $validated['bid'];
//         $bid->gender = $validated['gender'];
//         $bid->age = $validated['age'];
//         $bid->email = $validated['email'];
//         $bid->update();


//         $bid->update($validated);

        
//         return redirect('bidding01')->with('message', 'Data was successfully updated');
        
//     }

//     public function destroy(Bid $bid){
//         $bid->delete();
//         return redirect('bidding01')->with('message', 'Data was successfully deleted');
//     }


//     public function showBids()
// {
//     $bid = Bid::find(1); 
//     return view('bidding.show', compact('bid'));
// }




// }


// return back()->with('message', 'Data was successfully updated');