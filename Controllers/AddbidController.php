<?php

namespace App\Http\Controllers;

use App\Models\Addbids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddbidController extends Controller
{

    public function user_currentbidding() 
    {
       
        $data = array("addbids" => DB::table('addbids')->orderBy('bid', 'desc')->simplePaginate(10));
        return view('addbids.user_currentbidding', $data);
    }

    public function admin_currentbidding() 
    {
       
        $data = array("addbids" => DB::table('addbids')->orderBy('bid', 'desc')->simplePaginate(10));
        return view('addbids.admin_currentbidding', $data);
    }

    public function show($id){
        $data = Addbids::findOrFail($id);
        return view('addbids.edit', ['addbid' => $data]);
    }

    public function createbid(){
        return view('pages.bidding01');
    }

    public function storebid(Request $request){
        $validated = $request->validate([
            'user_name' => ['required', 'min:4'],
            'bid' => ['required', 'min:8'],
            
        ]);

        // $validated['password'] = bcrypt($validated['password']);

        Addbids::create($validated);

        return redirect('/user_currentbidding')->with('message', 'New Bid was added successfully!');
    }


    public function update(Request $request, Addbids $addbid){

        $validated = $request->validate([
            "user_name" => ['required', 'min:4'],
            "bid" => ['required', 'min:8'],
        ]);


        
        $addbid->user_name = $validated['user_name']; 
        $addbid->bid = $validated['bid'];
        $addbid->update();


        $addbid->update($validated);

        // return back()->with('message', 'Data was successfully updated');
        return redirect('admin_currentbidding')->with('message', 'Data was successfully updated');
        
    }

    public function destroy(Addbids $addbid){
        $addbid->delete();
        return redirect('admin_currentbidding')->with('message', 'Data was successfully deleted');
    }


}
