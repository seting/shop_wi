<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = session('username');
        $inbox = DB::table('letter')->where('sender','=',$username)->get();
        $inboxno = DB::table('letter')->where('sender','=',$username)->where('status','=',0)->get();
        $inboxyes = DB::table('letter')->where('sender','=',$username)->where('status','=',1)->get();
        $outbox = DB::table('letter')->where('consignee','=',$username)->get();
        // var_dump($inboxno);exit;
        return view('Index.Letter.letter',['inbox'=>$inbox,'outbox'=>$outbox,'inboxno'=>$inboxno,'inboxyes'=>$inboxyes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if (DB::table('letter')->insert($data)) {
            return redirect('/indexletter')->with('success','发表成功');
        }else{
            return redirect('/indexletter')->with('error','发表失败');
        }
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
    // 修改站内信的状态
    public function status(Request $request){
        $id = $request->input('id');
        $status['status']=1;
        if (DB::table('letter')->where('id','=',$id)->update($status)) {
            echo 1;
        }else{
            echo 0; 
        }
    }

    // ajax判断账号是否正确
    public function sender(Request $request){
        $sender = $request->input('sender');
        if(DB::table('user')->where('username','=',$sender)->first()){
            echo 1;
        }else{
            echo 0;
        }
    }
}
