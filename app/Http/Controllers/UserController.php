<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::all()->where('is_delete','=',0);
        return view('user.show')->with(['datas'=>$datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reg()
    {
        return view('reg');
    }

    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->tbl_user_types_id == "Middleclass")
        {
            
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',                     
            'phone' => 'required',
            'tbl_user_types_id' => 'required',
            'nid' => 'required',
            'nid_front_image' => 'required',
            'nid_back_image' => 'required',
            'bid' => 'required',
            'bid_image' => 'required',
            'birth_date'=> 'required',
            'address' => 'required',
            'card_no' => 'required',
            'family_members' => 'required',
            'earners' => 'required',
            'image' => 'required',
        ]);

$user = new User;

        $user->tbl_user_types_id = $request->tbl_user_types_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->nid = $request->nid;
        $user->bid = $request->bid;
        $user->birth_date = $request->birth_date;
        $user->address = $request->address;
        $user->card_no = $request->card_no;
        $user->family_members = $request->family_members;
        $user->earners = $request->earners;

        $file1 = $request->file('nid_front_image');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);
      $user->nid_front_image ='/images/' . $filename1;

      $file2 = $request->file('nid_back_image');
      $filename2 = time() . '.' . $file2->getClientOriginalExtension();
      $filepath2 = public_path('/images/');
      $file2->move($filepath2,$filename2);
      $user->nid_back_image ='/images/' . $filename2;

      $file3 = $request->file('bid_image');
      $filename3 = time() . '.' . $file3->getClientOriginalExtension();
      $filepath3 = public_path('/images/');
      $file3->move($filepath3,$filename3);
      $user->bid_image ='/images/' . $filename3;

      $file4 = $request->file('image');
      $filename4 = time() . '.' . $file4->getClientOriginalExtension();
      $filepath4 = public_path('/images/');
      $file4->move($filepath4,$filename4);
      $user->image ='/images/' . $filename4;

      if($user->save())
{
return redirect()->back()->with('message','Registration Successful, please wait for a while for the admin approval, message will be sent to your phone soon, thank you in advance to co-operate with us.');
}
    }
        else if($request->tbl_user_types_id == "Lowerclass")
        {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',                     
            'phone' => 'required',
            'tbl_user_types_id' => 'required',
            'nid' => 'required',
            'nid_front_image' => 'required',
            'nid_back_image' => 'required',
            'bid' => 'required',
            'bid_image' => 'required',
            'birth_date'=> 'required',
            'address' => 'required',
            'card_no' => 'required',
            'family_members' => 'required',
            'earners' => 'required',
            'image' => 'required',
        ]);

$user = new User;

        $user->tbl_user_types_id = $request->tbl_user_types_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->nid = $request->nid;
        $user->bid = $request->bid;
        $user->birth_date = $request->birth_date;
        $user->address = $request->address;
        $user->card_no = $request->card_no;
        $user->family_members = $request->family_members;
        $user->earners = $request->earners;

        $file1 = $request->file('nid_front_image');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);
      $user->nid_front_image ='/images/' . $filename1;

      $file2 = $request->file('nid_back_image');
      $filename2 = time() . '.' . $file2->getClientOriginalExtension();
      $filepath2 = public_path('/images/');
      $file2->move($filepath2,$filename2);
      $user->nid_back_image ='/images/' . $filename2;

      $file3 = $request->file('bid_image');
      $filename3 = time() . '.' . $file3->getClientOriginalExtension();
      $filepath3 = public_path('/images/');
      $file3->move($filepath3,$filename3);
      $user->bid_image ='/images/' . $filename3;

      $file4 = $request->file('image');
      $filename4 = time() . '.' . $file4->getClientOriginalExtension();
      $filepath4 = public_path('/images/');
      $file4->move($filepath4,$filename4);
      $user->image ='/images/' . $filename4;

      if($user->save())
{
return redirect()->back()->with('message','Registration Successful, please wait for a while for the admin approval, message will be sent to your phone soon, thank you in advance to co-operate with us.');
}
    }

       else if($request->tbl_user_types_id == "Volunteer")
        {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',
                                 
            'phone' => 'required',
            'tbl_user_types_id' => 'required',
            'nid' => 'required',
            'nid_front_image' => 'required',
            'nid_back_image' => 'required',
            'bid' => 'required',
            'bid_image' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);

$user = new User;

        $user->tbl_user_types_id = $request->tbl_user_types_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->nid = $request->nid;
        $user->bid = $request->bid;
        $user->birth_date = $request->birth_date;
        $user->address = $request->address;
        

        $file1 = $request->file('nid_front_image');
      $filename1 = time() . '.' . $file1->getClientOriginalExtension();
      $filepath1 = public_path('/images/');
      $file1->move($filepath1,$filename1);
      $user->nid_front_image ='/images/' . $filename1;

      $file2 = $request->file('nid_back_image');
      $filename2 = time() . '.' . $file2->getClientOriginalExtension();
      $filepath2 = public_path('/images/');
      $file2->move($filepath2,$filename2);
      $user->nid_back_image ='/images/' . $filename2;

      $file3 = $request->file('bid_image');
      $filename3 = time() . '.' . $file3->getClientOriginalExtension();
      $filepath3 = public_path('/images/');
      $file3->move($filepath3,$filename3);
      $user->bid_image ='/images/' . $filename3;

      $file4 = $request->file('image');
      $filename4 = time() . '.' . $file4->getClientOriginalExtension();
      $filepath4 = public_path('/images/');
      $file4->move($filepath4,$filename4);
      $user->image ='/images/' . $filename4;

      if($user->save())
{
return redirect()->back()->with('message','Registration Successful, please wait for a while for the admin approval, message will be sent to your phone soon, thank you in advance to co-operate with us.');
}
    }
else if($request->tbl_user_types_id == "Poor")
        {

       // $th = 
       $this->validate($request,[
            'name' => 'required|max:255',
            
            'password'=>'required|min:5',
                                 
            'phone' => 'required',
            
            'address' => 'required',
            'image' => 'required',
        ]);

       // if ($th) {
       //  //return view('/reg',['$request'=>$request->tbl_user_types_id]);
       //  return redirect()->route('reg', ['type' => $request->tbl_user_types_id]);
       // }

$user = new User;
        $user->tbl_user_types_id = $request->tbl_user_types_id;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->address = $request->address;

      $file4 = $request->file('image');
      $filename4 = time() . '.' . $file4->getClientOriginalExtension();
      $filepath4 = public_path('/images/');
      $file4->move($filepath4,$filename4);
      $user->image ='/images/' . $filename4;

      if($user->save())
{
return redirect()->back()->with('message','Registration Successful, please wait for a while for the admin approval, thank you in advance to co-operate with us.');
}
    }


    else if($request->tbl_user_types_id == "Donor")
        {

        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required',
            'password'=>'required|min:5',
                                 
            'phone' => 'required',
            
            'address' => 'required',
            'image' => 'required',
        ]);

$user = new User;
        $user->tbl_user_types_id = $request->tbl_user_types_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->address = $request->address;

      $file4 = $request->file('image');
      $filename4 = time() . '.' . $file4->getClientOriginalExtension();
      $filepath4 = public_path('/images/');
      $file4->move($filepath4,$filename4);
      $user->image ='/images/' . $filename4;

$code = Str::random(30);

      $user->confirmation_code = $code;

$to_email = $request->email;
$to_name = $request->name;

$confirmation_code = array('confirmation_code' => $code);

// $show = DB::table('users')->where('email','=',$to_email)->get();
//         return view('emailverify',['show'=>$show]);

      
      Mail::send('emailverify', $confirmation_code, function($message) use ($to_email, $to_name) {
         $message->to( $to_email , $to_name )->subject
            ('Email verification mail');
         $message->from('helpinghand@gmail.com','Helping hand');
      });

      if($user->save())
{

return redirect()->back()->with('message','Registration Successful, please wait for a while for the admin approval, message will be sent to your phone soon, thank you in advance to co-operate with us and email verification message sent to your email account, please verify this.');



}
    }

    else
    {
        return redirect()->back()->with('message','Registration is failed :(');
    }

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function verify()
{
return view('verification');
}

public function verified($confirmation_code)
{
$verified = DB::table('users')->where('confirmation_code', $confirmation_code)->update([ 'email_verified' => 1 ]);
//User::whereConfirmationCode($confirmation_code)->first();

// $verified->email_verified = 1;
if($verified)
{
return redirect('/reg')->with('message','Activation Successful, please wait for a while for the admin approval, you will be notified by your phone number soon, thank you in advance to co-operate with us.');
}

}

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id)->where('is_delete','=',0);
        return view('user.edit')->with(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',                     
            'phone' => 'numeric|min:11',
            'tbl_user_type_id' => 'required',
            'status' => 'required',
            'nid' => 'required|numeric|max:15',
            'birth_date'=> 'required', 
            'address' => 'required',
        ]);

        if($request->hasFile('image'))
        {           
            $path = $request->image->store('images', 'public');
            $data = [
                'name' => $request->name,
                'email' => strtolower($request->email),
                'tbl_user_type_id' => $request->type,
                'phone' => $request->mobile,
                'status' => $request->status,
                'nid' => $request->nid,
                'birth_date' => $request->birth_date,
                'address' => $request->address,
                'image' => $path,
            ];
        }

        else
        {
            $data = [
                'name' => $request->name,
                'email' => strtolower($request->email),
                'tbl_user_type_id' => $request->type,
                'phone' => $request->mobile,
                'status' => $request->status,
                'nid' => $request->nid,
                'birth_date' => $request->birth_date,
                'address' => $request->address,
                'image' => 'images/default.jpg',
            ];
        }

        User::create($data);
        return redirect()->to('user')->with('message','Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->update(['is_delete' => 1]);
        return redirect()->back()->with('message','Delete Successful.!');
    }
}
