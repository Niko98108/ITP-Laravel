<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\addItem;
use RealRashid\SweetAlert\Facades\Alert;


// Use Alert;



// use Barryvdh\DomPDF\PDF;

// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Positioner\NullPositioner;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\CoveredCodeNotExecutedException;

class addItemController extends Controller
{

    public function store(Request $request){

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

        return redirect('admin')->with('success','Food item is created');

        // ->with('add_items',$add_Items);

        // dd($request->all());
        //  $request -> input_img -> store('images','public');
        // dd($request->hasfile('input_img'));


    }

    public function display(){
        $add_items = addItem:: all();
        return view('admin')->with('add_items',$add_items);
    }

     public function edit($id){
        $add_items = addItem:: find($id);
        return view('updateItem')-> with('add_items',$add_items);

     }

     public function update(Request $request, $id){

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




     public function delete($id){
        $add_Items = addItem:: find($id);
        $add_Items-> delete();

        Alert::error('Item Delete', 'Delete success');

        return redirect('admin')-> with('add_items',$add_Items);

     }

     public function displayMenu(){
        $add_items =addItem::all();
        return view ('menu')->with('add_items',$add_items);

     }

     public function Generate(){

        $shows = addItem::all();

        return view('pdf', compact('shows'));

        // $pdf = PDF::loadHTML('admin');
        // return $pdf-> download('food item.pdf');

     }

     public  function downloadPDF(){

        $shows  = addItem::all();
        //  dd($add_item->all());
        // $pdf = PDF ::loadView('pdf',$shows);
        $pdf = PDF::loadview('pdf',compact('shows'));
          return $pdf-> download('food item.pdf');
        //   return $pdf->download('food_menu.pdf');

        // $pdf = PDF::loadHTML(compact('shows'));
        // return $pdf-> download('food item.pdf');
        // return $shows;



     }



}

