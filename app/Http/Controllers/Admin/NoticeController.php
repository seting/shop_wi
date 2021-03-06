<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 导入DB;
use DB;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 获取搜索关键词    
        $k=$request->input('keywords');
        //获取列表数据        
        $data=DB::table("notice")->where("title",'like',"%".$k."%")->paginate(5);        
        //加载模板        
        return view("Admin.Notice.notice",['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载添加模板
        return view('Admin.Notice.notice-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());
        $data = $request->except('_token');
        // var_dump($data);
        if (DB::table('notice')->insert($data)) {
            return redirect('/notice')->with('success','添加成功');
        }else{
            return redirect('/notice')->with('error','添加失败');
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
        // 修改公告模板
        return view('Admin.Notice.notice-edit');
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
       // echo $id;
       $data = DB::table('notice')->where('id','=',$id)->first();
       // var_dump($data->content);
       $str = $data->content;
       preg_match_all('/<img.*?src="(.*?)".*?>/is',$str,$array);
       // var_dump($array);
       // 执行删除
        if (DB::table('notice')->where('id','=',$id)->delete()) {
           
       
           if (isset($array[1])) {
                foreach ($array[1] as $key => $value) {
                    $s = substr($value,0,4);
                    // 判断是上传的图片还是远程图片
                    if ($s != 'http') {
                        unlink('.'.$value);
                    }
                }
                return redirect('/notice')->with('success','删除成功');
            }
        }
    }
}
