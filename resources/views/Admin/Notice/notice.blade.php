@extends('Admin.Public.public')
@section('content')
@section('title','公告列表')
<!doctype html>
<script src="/static/jquery-1.8.3.min.js"></script> 
<!-- 显示添加成功或失败 -->
           @if(session('success'))
           <div class="mws-form-message success">
               {{session('success')}}
           </div>
           @endif
            @if(session('error'))
           <div class="mws-form-message error">
               {{session('error')}}
           </div>
           @endif
     <div class="mws-panel grid_8 mws-collapsible"> 
        <div class="mws-panel-header"> 
            <span><i class="icon-table"></i>公告列表</span> 
            <div class="mws-collapse-button mws-inset">
            <span></span>
            </div>

            <div class="mws-collapse-button mws-inset"><span></span></div><div class="mws-collapse-button mws-inset"><span></span></div>
        </div> 
    <div class="mws-panel-inner-wrap">
        <div class="mws-panel-body no-padding"> 
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <form action="/notice" method="get">
                    <div class="dataTables_filter" id="DataTables_Table_0_filter">
                        <label>搜索: <input type="text" aria-controls="DataTables_Table_0" name="keywords" value="{{$request['keywords'] or ''}}"></label>
                        <input type="submit" value="搜索">
                    </div>
                </form>
                <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"> 
                     <thead> 
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 213px;">编号</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 280px;">标题</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 257px;">内容</th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 183px;">操作</th>
                        </tr> 
                </thead> 

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($data as $row)
                        <tr class="odd"> 
                            <td class="  sorting_1">{{$row->id}}</td> 
                            <td class=" ">{{$row->title}}</td> 
                            <td class=" ">{!!$row->content!!}</td>
                            <td class=" ">
                                <span class="btn-group"> 
                                    <a href="" class="btn btn-small " title="修改"><i class="icon-pencil"></i></a>
                                    <form action="/notice/{{$row->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                        <button class="btn btn-danger" title="删除"><i class="icon-trash"></i></button> 
                                    </form>
                                </span> 
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_full_numbers" id="pages">
                    {{$data->appends($request)->render()}}
                </div>
            </div> 
        </div>
    </div>
</div> 
@endsection