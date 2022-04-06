<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\model\Offer;
//use Dotenv\Validator;
//use http\Env\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;


class C extends Controller
{

    public function show()
    {
      $offer=Offer::get();
        return view('offers.all');
        return $offer;
    }

    public function store(Request $request)
    {

        Offer::create([
            'name_ar' => $request->name_ar,
            'details_ar' => $request->details_ar,
            'name_en' => $request->name_en,
            'details_en' => $request->details_en,
            'price' => $request->price,

        ]);

    }

    public function get()
    {
        $offers= Offer::select('id',
            'price',
            'name_'  .LaravelLocalization::getCurrentLocale() . ' as name'  ,
            'details_' .LaravelLocalization::getCurrentLocale() .  ' as details'


        )->get();
//return $offer=Offer::select('name')
        return view('offers.all',compact('offers'));
    }



    //    $rules =
        //    [
      //          'name' => 'required|max:255',
          //      'price' => 'required',
            //    'details' => 'required'
            //];

        //$message = [
          //  'name.required' => __('message.offer name'),
            //'price.required' => __('message.offer price'),
            //'details.required' => __('message.offer details')
       // ];

        //$validator = Validator::make($request->all(), $rules, $message);
        //if ($validator->fails()) {
          //  return redirect()->back()->withErrors($validator)->withInput($request->all());
        //}

    //    return redirect()->back()->with(['success' => 'تم التسجيل']);
    //}
    //protected function getmessage(){

    //}


}
/*insert

offer::create([
    'name'=>'ahmed',
    'price'=>'87677',
    'details'=>'ahmed best'
]);

///////////////////////

///////////
