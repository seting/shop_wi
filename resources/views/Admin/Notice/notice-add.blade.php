@extends('Admin.Public.public')
@section('content')
@section('title','公告列表')
<!doctype html>
<!-- 加载百度编辑器 -->
<script type="text/javascript" charset="utf-8" src="/static/public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/public/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/static/public/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>公告添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form action="/notice" method="post" class="mws-form">
                                   <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">标题:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="title" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">内容:</label>
                              <div class="mws-form-item">
                                   <script id="editor" type="text/plain"  name="content" style="width:700px;height:500px;"></script>
                              </div>
                         </div>
                         
                    </div>
                    <div class="mws-button-row">
                         {{csrf_field()}}
                         <input type="submit" class="btn btn-danger" value="添加">
                         <input type="reset" class="btn " value="重置">
                    </div>
               </form>
          </div>         
      </div>
<!-- 实例化百度编辑器 -->
<script type="text/javascript">
     //实例化编辑器
     //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包    用UE.getEditor('editor')就能拿到相关的实例
     var ue = UE.getEditor('editor');
</script>
@endsection