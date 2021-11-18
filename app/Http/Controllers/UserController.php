<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\UserService;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Phone;
use App\Models\Sach;

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

        $phone = Phone::find(1)->user->name;
        dd($phone);


        $books = Sach::all();

        // $book = Sach::find(1);
        // $book->delete();

        dd($books->toArray());

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
