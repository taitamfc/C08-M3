<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\UserService;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Phone;
use App\Models\Sach;
use App\Models\Country;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests\FormExampleRequest;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use Exception;

use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // echo '<br> Controller call service search() '.__METHOD__;
        // $this->userService->search();

        // $user = User::find(1)->phone->phone;
        // dd($user);

        // $phone = Phone::find(1)->user->name;
        // dd($phone);

        // $users = Country::find(1)->users->toArray();
        // dd($users);

        // $user = User::find(1)->country->name;
        // dd($user);

        // $roles = User::find(2)->roles->toArray();
        // dd($roles);

        $users = User::all();
        foreach ($users as $user) {
            // echo '<pre>';
            // print_r($user->roles->toArray());
            // echo '</pre>';
            // echo '<hr>';
        }

        $postsCountry = Country::find(1)->posts->toArray();
        dd($postsCountry);




        $books = Sach::all();

        // $book = Sach::find(1);
        // $book->delete();

        //dd($books->toArray());

        // $books = DB::table('books')->pluck('name','id');
        // dd($books);


        $numbers = [1,2,3,4,5,6,7,8,9,10];

        $params = [
            'user_name' => '<script> alert(123) </script>',
            'numbers'   => $numbers,
        ];
        return view('users.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $messages = [
            'username.required' => 'Truong username la bat buoc',
            'email.required'    => 'Truong email la bat buoc',
            'email.email'       => 'Vui long nhap dung email',
            'email.unique'      => 'Email da ton tai',
        ];

        $roles = [
            'username'      => 'required',
            'email'         => 'required|email|unique:users',
        ];

        $this->validate($request, $roles , $messages);

        echo 123;
        die();
    }

    public function store2(Request $request)
    {
        $messages = [
            'username.required' => 'Truong username la bat buoc',
            'username.min'      => 'Vui long nhap it nhat 8 ky tu',
            'email.required'    => 'Truong email la bat buoc',
            'email.email'       => 'Vui long nhap dung email',
            'email.unique'      => 'Email da ton tai',
        ];

        $roles = [
            'username'      => 'required|min:8',
            'email'         => 'required|email|unique:users',
        ];

        $validator = Validator::make($request->all(),$roles,$messages);

        if ($validator->fails()) {
            // return redirect('post/create')
            //             ->withErrors($validator)
            //             ->withInput();

            return back()->withErrors($validator)->withInput();
        }

        echo 123;
        die();
    }

    public function store(FormExampleRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
        Log::info('Someone view this user: '.$id);

        try{
            $user = User::findOrFail($id);
     
            
        }catch( ModelNotFoundException $exception ){
            dd('User not found');
        }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function link_vip( Request $request,$age ){
        //dd( $request->all() );
        echo __METHOD__;


    }
}
