<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\addItem;
use RealRashid\SweetAlert\Facades\Alert;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;

class addItemController extends Controller
{

    public function store(Request $request){   // store data into database(add btn)

        // dd($request->all());
        $add_Items = new addItem;


        $this->validate($request,[
            'item_name'=>'required|max:50|min:2',
            'item_code'=>'required|max:50|min:2',
            'item_price'=>'required|max:50|min:1',
            'item_details'=>'required|max:100|min:2',]);



        $add_Items -> name = $request -> item_name;
        $add_Items -> Item_code = $request -> item_code;
        $add_Items -> price = $request -> item_price;
        $add_Items -> details =$request -> item_details;

        if($request->hasfile('input_img')){
            $file =$request-> file('input_img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'. $extenstion;
            $file -> move('images',$filename);
            $add_Items -> image = $filename;

        }
        else{
            return $request;
            $add_Items -> image = null;
        }

        $add_Items -> save();





        Alert::success('Success Title', 'Success Message');

        return redirect('admin');

        // ->with('add_items',$add_Items);

        // dd($request->all());
        //  $request -> input_img -> store('images','public');
        // dd($request->hasfile('input_img'));


    }

    public function display(){         // display all data in admin view
        $add_items = addItem:: all();
        return view('admin')->with('add_items',$add_items);
    }

     public function edit($id){          // edit btn function
        $add_items = addItem:: find($id);
        return view('updateItem')-> with('add_items',$add_items);

     }

     public function update(Request $request, $id){  //update btn function in updateItem view

        // dd($request->all());
        // $affected = DB::table('users')
        //       ->where('id', 1)
        //       ->update(['votes' => 1]);

        $add_Items = addItem:: find($id);

        $add_Items -> name = $request->input('item-name');
        $add_Items -> Item_code = $request->input('item-code');
        $add_Items -> price = $request->input('item-price');
        $add_Items -> details = $request->input('item-details');

            if($request->hasfile('input_img')){
                $file =$request-> file('input_img');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'. $extenstion;
                $file -> move('images',$filename);
                $add_Items -> image = $filename;

            }



        $add_Items->save();
        Alert::info('Updated', 'Updated success');


        return Redirect('admin')->with('add_Items',$add_Items);

     }




     public function delete($id){               // delete btn in admin view
        $add_Items = addItem:: find($id);
        $add_Items-> delete();

        Alert::error('Item Delete', 'Delete success');

        return redirect('admin')-> with('add_items',$add_Items);

     }

     public function displayMenu(){   // all food item display in menu view
        $add_items =addItem::all();
        return view ('menu')->with('add_items',$add_items);

     }

     public function Generate(){ //pdf btn in admin view

        $item = addItem::all();

        return view('pdf', compact('item'))->with('item',$item);

        // $pdf = PDF::loadHTML('admin');
        // return $pdf-> download('food item.pdf');

     }

     public function downloadPDF(){             // download  btn in pdf view


        $item  = addItem::all();
        //  dd($shows->all());
        $pdf = PDF::loadView('pdf',compact('item'));
        return $pdf->download('food-List.pdf');

    }

     public function search(){             //search box in admin view

        $search_text = $_GET['search'];
        $add_items = addItem::where('name','LIKE','%'.$search_text.'%')->get();
        return view('search',compact('add_items'));

     }




}

