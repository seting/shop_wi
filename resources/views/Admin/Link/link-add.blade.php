@extends('Admin.Public.public')
@section('content')
@section('title','公告列表')
<!doctype html>
<div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>会员添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form action="/admins" method="post" class="mws-form">
                                   <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">用户名:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="username" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" name="password" class="small" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">确认密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" name="repassword" class="small" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">权限:</label>
                              <div class="mws-form-item">
                                   <input type="text" name="level" class="small" value="">
                              </div>
                         </div>
                    </div>
                    <div class="mws-button-row">
                    <input type="hidden" name="status" value="0">
                         <input type="submit" class="btn btn-danger" value="添加">
                         <input type="reset" class="btn " value="重置">
                    </div>
                    <input type="hidden" name="_token" value="I4Qc7n8TUQzUf5IC9NUMhsGGqGZ2SBTOHe64KrLD">
               </form>
          </div>         
      </div>
@endsection