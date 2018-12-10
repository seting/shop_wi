@extends('Admin.Public.public')
@section('content')
@section('title','后台首页')
<div class="container">
<script src="/static/jquery-1.8.3.min.js"></script>


    <div class="mws-panel grid_8 mws-collapsible"> 
     <div class="mws-panel-header"> 
      <span><i class="icon-table"></i>用户列表</span> 
      <div class="mws-collapse-button mws-inset">
       <span></span>
      </div>
     <div class="mws-collapse-button mws-inset"><span></span></div><div class="mws-collapse-button mws-inset"><span></span></div></div> 
     <div class="mws-panel-inner-wrap">
      <div class="mws-panel-body no-padding"> 
       <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
        <form action="/admins" method="get">
          <div class="dataTables_filter" id="DataTables_Table_0_filter">
             <label>搜索: <input type="text" aria-controls="DataTables_Table_0" name="keywords" value=""></label>
             <input type="submit" value="搜索">
          </div>
        </form>
        <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"> 
         <thead> 
          <tr role="row">
           <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 213px;">编号</th>
           <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 280px;">用户</th>
           <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 257px;">密码</th>
           <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 188px;">权限</th>
           <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 141px;">状态</th>
           <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 183px;">操作</th>
          </tr> 
         </thead> 
         
         
         <tbody role="alert" aria-live="polite" aria-relevant="all">
                   <tr class="odd"> 
           <td class="  sorting_1">10</td> 
           <td class=" ">root</td> 
           <td class=" ">63a9f0ea7bb98050796b649e85481845</td> 
           <td class=" ">3</td> 
           <td class=" ">激活</td> 
           
           <td class=" "> <span class="btn-group"> 
           <a href="/admins/10" class="btn btn-small del"><i class="icon-home-2"></i></a>
            <a href="/admins/10/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
            <form action="/admins/10" method="post" style="display:inline;">
                <button type="submit" class="btn btn-small"><i class="icon-trash">
                    <input type="hidden" name="_token" value="I4Qc7n8TUQzUf5IC9NUMhsGGqGZ2SBTOHe64KrLD">
                    <input type="hidden" name="_method" value="DELETE">
                    
                </i></button> 
            </form> 
            
            </span> </td> 
          </tr>
                    <tr class="odd"> 
           <td class="  sorting_1">11</td> 
           <td class=" ">admin</td> 
           <td class=" ">21232f297a57a5a743894a0e4a801fc3</td> 
           <td class=" ">3</td> 
           <td class=" ">激活</td> 
           
           <td class=" "> <span class="btn-group"> 
           <a href="/admins/11" class="btn btn-small del"><i class="icon-home-2"></i></a>
            <a href="/admins/11/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
            <form action="/admins/11" method="post" style="display:inline;">
                <button type="submit" class="btn btn-small"><i class="icon-trash">
                    <input type="hidden" name="_token" value="I4Qc7n8TUQzUf5IC9NUMhsGGqGZ2SBTOHe64KrLD">
                    <input type="hidden" name="_method" value="DELETE">
                    
                </i></button> 
            </form> 
            
            </span> </td> 
          </tr>
                    <tr class="odd"> 
           <td class="  sorting_1">18</td> 
           <td class=" ">13566628889</td> 
           <td class=" ">c39d5551067d4d93e89fd88645a1792a</td> 
           <td class=" ">3</td> 
           <td class=" ">禁用</td> 
           
           <td class=" "> <span class="btn-group"> 
           <a href="/admins/18" class="btn btn-small del"><i class="icon-home-2"></i></a>
            <a href="/admins/18/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
            <form action="/admins/18" method="post" style="display:inline;">
                <button type="submit" class="btn btn-small"><i class="icon-trash">
                    <input type="hidden" name="_token" value="I4Qc7n8TUQzUf5IC9NUMhsGGqGZ2SBTOHe64KrLD">
                    <input type="hidden" name="_method" value="DELETE">
                    
                </i></button> 
            </form> 
            
            </span> </td> 
          </tr>
                    <tr class="odd"> 
           <td class="  sorting_1">25</td> 
           <td class=" ">123</td> 
           <td class=" ">b3ddbc502e307665f346cbd6e52cc10d</td> 
           <td class=" ">3</td> 
           <td class=" ">激活</td> 
           
           <td class=" "> <span class="btn-group"> 
           <a href="/admins/25" class="btn btn-small del"><i class="icon-home-2"></i></a>
            <a href="/admins/25/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
            <form action="/admins/25" method="post" style="display:inline;">
                <button type="submit" class="btn btn-small"><i class="icon-trash">
                    <input type="hidden" name="_token" value="I4Qc7n8TUQzUf5IC9NUMhsGGqGZ2SBTOHe64KrLD">
                    <input type="hidden" name="_method" value="DELETE">
                    
                </i></button> 
            </form> 
            
            </span> </td> 
          </tr>
                    <tr class="odd"> 
           <td class="  sorting_1">26</td> 
           <td class=" ">13617764381</td> 
           <td class=" ">c39d5551067d4d93e89fd88645a1792a</td> 
           <td class=" ">0</td> 
           <td class=" ">激活</td> 
           
           <td class=" "> <span class="btn-group"> 
           <a href="/admins/26" class="btn btn-small del"><i class="icon-home-2"></i></a>
            <a href="/admins/26/edit" class="btn btn-small"><i class="icon-pencil"></i></a>
            <form action="/admins/26" method="post" style="display:inline;">
                <button type="submit" class="btn btn-small"><i class="icon-trash">
                    <input type="hidden" name="_token" value="I4Qc7n8TUQzUf5IC9NUMhsGGqGZ2SBTOHe64KrLD">
                    <input type="hidden" name="_method" value="DELETE">
                    
                </i></button> 
            </form> 
            
            </span> </td> 
          </tr>
                   </tbody>
        </table>

         <div class="dataTables_paginate paging_full_numbers" id="pages">
         <ul class="pagination">
        
                    <li class="disabled"><span>«</span></li>
        
        
                    
            
            
                                                                        <li class="active"><span>1</span></li>
                                                                                <li><a href="http://hua.com/admins?page=2">2</a></li>
                                                                                <li><a href="http://hua.com/admins?page=3">3</a></li>
                                                        
        
                    <li><a href="http://hua.com/admins?page=2" rel="next">»</a></li>
            </ul>

        </div>
       </div> 
      </div>
     </div> 
    </div> 
    <!-- footer --> 
   </div>
@endsection