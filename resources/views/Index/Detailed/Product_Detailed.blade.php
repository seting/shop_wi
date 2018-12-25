@if(session('success'))
<div class="success">
    <p  style="background:#E1F1C0;width100%;height:30px;text-align:center;line-height:30px;cursor: pointer;">发表成功</p>
</div> 
@endif
@extends('Index.Public.public')
@section('css')
<link href="/Home/css/common.css" rel="stylesheet" type="text/css" />
<link href="/Home/fonts/iconfont.css"  rel="stylesheet" type="text/css" />
<link href="/Home/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Home/css/Orders.css" rel="stylesheet" type="text/css" />
<link href="/Home/css/show.css" rel="stylesheet" type="text/css" />
<link href="/Home/css/purebox-metro.css" rel="stylesheet" id="skin">
<script src="/Home/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="/Home/js/jquery.reveal.js" type="text/javascript"></script>
<script src="/Home/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/Home/js/common_js.js" type="text/javascript"></script>
<script src="/Home/js/footer.js" type="text/javascript"></script>
<!--图片放大效果-->
<script src="/Home/js/jqzoom.js" type="text/javascript"></script>
@endsection
@section('main')
<!-- 添加成功与失败的jq -->
        <script>
            // 成功
            $('.success').click(function(){
                $(this).empty();
            })
            // 失败
            $('.error').click(function(){
                $(this).empty();
            })
        </script>
<!--产品详细页样式-->
<div class="clearfix Inside_pages">
<div class="Location_link">
  <em></em><a href="#">进口食品、进口牛</a>  &lt;   <a href="#">进口饼干/糕点</a>    &lt;   <a href="#">销售产品名称</a>  
 </div>
 <!--产品详细介绍样式-->
 <div class="clearfix" id="goodsInfo">
 <!--产品图片放大-->
   <div class="mod_picfold clearfix">
    <div class="clearfix" id="detail_main_img">
	 <div class="layout_wrap preview">
     <div id="vertical" class="bigImg">
		<img src="/Home/mid/01.jpg" width="" height="" alt="" id="midimg" />
		<div id="winSelector"></div>
	</div>
     <div class="smallImg">
		<div class="scrollbutton smallImgUp disabled">&lt;</div>
		<div id="imageMenu">
			<ul>
				<li><img src="/Home/small/01.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/Home/small/02.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/Home/small/03.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/Home/small/04.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/Home/small/05.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/Home/small/06.jpg" width="68" height="68" alt="洋妞"/></li>
                <li><img src="/Home/small/07.jpg" width="68" height="68" alt="洋妞"/></li>
			</ul>
		</div>
		<div class="scrollbutton smallImgDown">&gt;</div>
	</div><!--smallImg end-->	
	<div id="bigView" style="display:none;"><div><img width="800" height="800" alt="" src="" /></div></div>
	 </div>
	</div>
		 <div class="Sharing">
	 <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1441079683326"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
  <!--收藏-->
	  <div class="Collect"><a href="javascript:collect(92)"><em class="ico1"></em>收藏商品( 2345 )</a></div>
	 </div>
   </div>
    <!--产品信息-->
    <div class="property">
     <form action="javascript:addToCart(97)" name="ECS_FORMBUY" id="ECS_FORMBUY">
       <h2>乐品乐茶 碧螺春2015新茶茶叶绿茶一级洞庭山明前春茶礼盒125g*2</h2>
       <div class="goods_info">◆买即送大麦茶◆满2件减10元再赠2罐大麦茶◆礼品袋茶包免费赠◆</div>
       <div class="ProductD clearfix">
       <div class="productDL">       
        <dl><dt>售&nbsp;&nbsp;&nbsp;&nbsp;价：</dt><dd><span id="ECS_SHOPPRICE"><i>￥</i>121.01</span><del>市场价：￥220.01</del></dd> </dl>
        <dl><dt>总 重 量：</dt><dd>140克</dd> </dl>
        <dl>
          <dt>规&nbsp;&nbsp;&nbsp;&nbsp;格：</dt>
          <dd >
           <div class="item  selected"><b></b><a href="#none" title="小礼盒">小礼盒</a></div> 
           <div class="item"><b></b><a href="#none" title="普通包装">普通包装</a></div>
           <div class="item"><b></b><a href="#none" title="大礼盒">大礼盒</a></div>
           <div class="item"><b></b><a href="#none" title="铁盒装">铁盒装</a></div>
          </dd>
        </dl>
        <dl><dt>上架时间：</dt><dd>2015-04-14</dd></dl>
        <div class="Appraisal"><p>销售评价</p><a>1234</a> </div>
       </div>
      </div>
      <div class="buyinfo" id="detail_buyinfo">
		<dl>
        <dt>数量</dt>
        <dd>
		  <div class="choose-amount left">
			<a class="btn-reduce" href="javascript:;" onclick="setAmount.reduce('#buy-num')">-</a>
			<a class="btn-add" href="javascript:;" onclick="setAmount.add('#buy-num')">+</a>
			<input class="text" id="buy-num" value="1" onkeyup="setAmount.modify('#buy-num');">		
		 </div>
		 <div class="P_Quantity">剩余：50000件</div>        
        </dd>
	  <dd>
	    <div class="wrap_btn"> <a href="javascript:addToCart_bak(92)" class="wrap_btn1" title="加入购物车"></a> 
		  <a href="javascript:addToCart(92)" class="wrap_btn2" title="立即购买"></a> </div>
		  </dd>
	  </dl>
	  </div>
      <div class="Guarantee clearfix">
	   <dl><dt>支付方式</dt><dd><em></em>货到付款（部分地区）</dd><dd><em></em>在线支付</dd> 
	   <dd> <div class="payment" id="payment"> 
       <a href="javascript:void(0);" class="paybtn">支付方式<span class="iconDetail"></span></a><ul><li>货到付款</li><li>礼品卡支付</li><li>网上支付</li><li>银行转账</li></ul>
       </div>
	  </dd>
      </dl>
     </div>
     </form>
    </div>
    <!--推荐-->
    <div class="p_right_info">
    <div class="Brands">
     <a href="#"><img src="/Home/products/logo/logo.jpg"  width="120" height="60"/></a>
     <h5>红尊</h5>
    </div>
    <div class="Recommend">
      <div class="title_name">同类产品推荐</div>
	  <div class="Recommend_list">
	    <ul>
		 <li class="clearfix">
		 <div class="pic_img"><a href=""><img src="/Home/Products/p_3.jpg" data-bd-imgshare-binded="1"></a></div>
		 <div class="r_content">
			<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
			<div class="p_Price">￥32.50</div>
          </div>
		 </li>
		  <li class="clearfix">
		 <div class="pic_img"><a href=""><img src="/Home/Products/p_17.jpg" data-bd-imgshare-binded="1"></a></div>
		 <div class="r_content">
			<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
			<div class="p_Price">￥32.50</div>
          </div>
		 </li>
		  <li class="clearfix">
		 <div class="pic_img"><a href=""><img src="/Home/Products/p_24.jpg" data-bd-imgshare-binded="1"></a></div>
		 <div class="r_content">
			<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
			<div class="p_Price">￥32.50</div>
          </div>
		 </li>
		</ul>
	  </div>
   </div>
  </div>
 </div>
 <!--样式-->
  <div class="clearfix">
   <div class="left_style">
    <div class="user_Records">
     <div class="title_name">用户浏览记录</div>
	 <ul>
	  <li>
	   <a href="#">
	   <p><img src="/Home/Products/p_4.jpg" data-bd-imgshare-binded="1"></p>
	   <p class="p_name">SanmiuSunflower新苗向日葵 乳酪夹心饼干 270g 菲律宾进口</p>
	   </a>
	   <p><span class="p_Price"><i>￥</i>5.30</span><b>10.4</b></p>
	  </li>
	  <li>
	   <a href="#">
	   <p><img src="/Home/Products/p_5.jpg" data-bd-imgshare-binded="1"></p>
	   <p class="p_name">商品名称</p>
	   </a>
	   <p><span class="p_Price"><i>￥</i>5.30</span><b>10.4</b></p>
	  </li>
	  <li>
	   <a href="#">
	   <p><img src="/Home/Products/p_3.jpg" data-bd-imgshare-binded="1"></p>
	   <p class="p_name">商品名称</p>
	   </a>
	   <p><span class="p_Price"><i>￥</i>5.30</span><b>10.4</b></p>
	  </li>
	 </ul>
   </div>
   </div>
   <!--介绍信息样式--> 
   <div class="right_style">	  
		<div class="inDetail_boxOut ">
	 <div class="inDetail_box">
	  <div class="fixed_out ">
	   <ul class="inLeft_btn fixed_bar">
                  <li class="active"><a id="property-id" href="#shangpsx" class="current">规格与包装</a></li>
                  <li><a id="detail-id" href="#shangpjs">商品属性</a></li>
                  <li><a id="shot-id" href="#miqsp">售后服务</a></li>
                  <li><a id="coms1-id" href="#status2">买家评论({{count($judgelist['judgeall'])}})</a></li>
                </ul>
               <div class="subbuy">
          <span class="extra currentPrice"> ¥129.90</span>
          <a href="#" class="extra  notice J_BuyButtonSub">立即购买</a></div>
	  </div>
	 </div>	  
	</div> 
    <div id="shangpjs" class="info_style" style="text-align:center"><img src="/Home/products/cp.jpg" /></div>
    <div class="productContent" id="status2">
      <div class="iComment clearfix">
        <div class="rate"><strong id="goodRate">
        @if(count($judgelist['judgegood'])>0)
            {{floor(count($judgelist['judgegood'])/count($judgelist['judgeall'])*100) }}
        @else
            0
        @endif
        <span>%</span></strong><br>
          <span>好评度</span></div>
        <div class="percent" id="percentRate">
          <dl>
            <dt>好评<span>(<i id="haofen">
            @if(count($judgelist['judgegood'])>0)
                {{floor(count($judgelist['judgegood'])/count($judgelist['judgeall'])*100)}}%
            @else
                0
            @endif
            </i>)</span></dt>
            <dd>
              <div style="width:100px;" id="goodwool"></div>
            </dd>
          </dl>
          <dl>
            <dt>一般<span>(<i id="yifen">
            @if(count($judgelist['judgeordinary'])>0)
                {{floor(count($judgelist['judgeordinary'])/count($judgelist['judgeall'])*100)}}%
            @else
                0
            @endif
            </i>)</span></dt>
            <dd class="d1">
              <div style="width:100px;" id="ordinarywool"> </div>
            </dd>
          </dl>
          <dl>
            <dt>差评<span>(<i id="chafen">
            @if(count($judgelist['judgebad'])>0)
                {{floor(count($judgelist['judgebad'])/count($judgelist['judgeall'])*100)}}%
            @else
                0
            @endif
            </i>)</span></dt>
            <dd class="d1">
              <div style="width:100px;" id="badwool"> </div>
            </dd>
          </dl>
        </div>
        <!-- 评价分数线的js -->
        <script>
            // 好评分数线
            $('#goodwool').css('backgroundColor','#EFEFEF');
            haofen = $('#haofen').html();
            long1 = 100*(parseInt(haofen)/100);
            div = $('<div style="width:'+long1+'px'+';height:10px;background:#ff6700"></div>');
            $('#goodwool').append(div);
            // 一般分数线
            $('#ordinarywool').css('backgroundColor','#EFEFEF');
            yifen = $('#yifen').html();
            long2 = 100*(parseInt(yifen)/100);
            div2 = $('<div style="width:'+long2+'px'+';height:10px;background:#ff6700"></div>');
            $('#ordinarywool').append(div2);
            // 差评分数线
            $('#badwool').css('backgroundColor','#EFEFEF');
            chafen = $('#chafen').html();
            long3 = 100*(parseInt(chafen)/100);
            div3 = $('<div style="width:'+long3+'px'+';height:10px;background:#ff6700"></div>');
            $('#badwool').append(div3);
        </script>
        <div class="actor">
          <dl>
            <dt>发表评价即可获得10积分，精华评论更有 <font color="red">额外奖励</font> 积分；<br>
              还有7个多倍积分名额哦，赶紧抢占吧！<br>
              只有购买过该商品的用户才能进行评价。</dt>
            <dd>
            @if(session('id')>=1)
              <input type="submit" class="Publication_btn" onclick="send_cooment()" value="发表评论">
            @else
                <input type="text" class="Publication_btn" onclick="send_cooment()" value="请先登录" disabled>
            @endif
            </dd>
          </dl>
        </div>
      </div>
	  <div class="commentBox" style="display:none;">
		<form action="/indexjudge" method="post" name="commentForm" id="commentForm">
		  <h3>商品评分</h3>
		  <div id="star">
			<ul>
                <label for="grade0">
			        <li onclick="dorank(0)">
                        <span id="fenshu0"></span>
    				    <p>0分</p>
    				    <p>不满意</p>
			        </li>
                </label>
              <input type="radio" name="status" value="0"  id="grade0" style="display:none" />

			  <label for="grade1">
                    <li onclick="dorank(1)">
                        <span id="fenshu1"></span>
                        <p>1分</p>
                        <p>一般</p>
                    </li>
                </label>
              <input type="radio" name="status" value="1"  id="grade1" style="display:none" />
              
               <label for="grade2">
                    <li onclick="dorank(2)">
                        <span id="fenshu2"></span>
                        <p>2分</p>
                        <p>满意</p>
                    </li>
                </label>
              <input type="radio" name="status" value="2"  id="grade2" style="display:none" />
			</ul>
			
		  </div>
            <!-- 商品评分js -->
            <script>
                function dorank(rank_id){
                    // alert(rank_id)
                    if (rank_id==0) {
                        // 所有星星都变暗
                        $('#star ul label li span').css('background-image','url(/Home/images/bg_star1.png)');
                        // 选中的星星那边亮
                        $('#fenshu0').css('background-image','url(/Home/images/bg_star2.png)');
                    }
                    if (rank_id==1) {
                        $('#star ul label li span').css('background-image','url(/Home/images/bg_star1.png)');
                        $('#fenshu1').css('background-image','url(/Home/images/bg_star2.png)');
                    }
                    if (rank_id==2) {
                        $('#star ul label li span').css('background-image','url(/Home/images/bg_star1.png)');
                        $('#fenshu2').css('background-image','url(/Home/images/bg_star2.png)');
                    }
                }
            </script>
		  <h4>评论内容</h4>
		  <div class="bd">
			<textarea name="judge" id="content" class="textarea_long" onkeyup="checkLength(this);" required></textarea>
			<p class="g">
			  <label>&nbsp; </label>
              {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{session('id')}}">
                <input type="hidden" name="goods_id" value="{{$id}}">
                <input type="submit" value="发表" class="btn_common">
			  <span t="word_calc" class="word"><b id="sy">0</b>/1000</span> </p>
		  </div>
		</form>
		</div>
		<div id="ECS_COMMENT"> <div class="Comment">
        
<div class="CommentTab">
  <ul>
	<li class="active" onclick="checkjudge(0)" id="alljudge">全部评论(<b>{{count($judgelist['judgeall'])}}</b>)</li>
	<li onclick="checkjudge(1)" id="goodjude">好评(<b>{{count($judgelist['judgegood'])}}</b>)</li>
	<li onclick="checkjudge(2)" id="ordinaryjudge">一般(<b>{{count($judgelist['judgeordinary'])}}</b>)</li>
	<li onclick="checkjudge(3)" id="badjudge">差评(<b>{{count($judgelist['judgebad'])}}</b>)</li>
  </ul>
</div>
<div class="CommentText" id="goodsdetail_comments_list" style="display:block">
    <div id="goodsdetail_comments_list_content">
        <!-- 全部评论 -->
        <div style="display:block" id="goodsdetail_all">
            <br>
            @if(!$judgelist['judgeall'])
                <div style="width:100%;height:50px;text-align:center" class="meiyou">
                    <p>对不起。没有评论</p>
                </div>
            @endif
            @foreach($judgelist['judgeall'] as $alljudge)
            <div style="border:1px solid white;float:left" class="a1">
                <img src="{{$alljudge->pic}}" width="50px" height="50px" >
                <p style="margin-left:10px;">{{$alljudge->username}}</p>
            </div>
            <div style="float:left;margin-left:20px;" class="a1">
                <p>{{$alljudge->judge}}</p><br>
                <p>{{$alljudge->addtime}}</p>
            </div>
            <div style="clear:both;border-top:1px solid #ccc;" class="a1"></div><br>
            @endforeach
            
        </div>
        <!-- 好评 -->
        <div style="display:none" id="goodsdetail_good">
            <br>
            @if(!$judgelist['judgegood'])
                <div style="width:100%;height:50px;text-align:center" class="meiyou">
                    <p>对不起。没有评论</p>
                </div>
            @endif
            @foreach($judgelist['judgegood'] as $alljudge)
            <div style="border:1px solid white;float:left" class="a2">
                <img src="{{$alljudge->pic}}" width="50px" height="50px" >
                <p style="margin-left:10px;">{{$alljudge->username}}</p>
            </div>
            <div style="float:left;margin-left:20px;" class="a2">
                <p>{{$alljudge->judge}}</p><br>
                <p>{{$alljudge->addtime}}</p>
            </div>
            <div style="clear:both;border-top:1px solid #ccc;" class="a2"></div><br>
            @endforeach
        </div>
        <!-- 一般 -->
        <div id="goodsdetail_ordinary" style="display:none">
            <br>
            @if(!$judgelist['judgeordinary'])
                <div style="width:100%;height:50px;text-align:center" class="meiyou">
                    <p>对不起。没有评论</p>
                </div>
            @endif
            @foreach($judgelist['judgeordinary'] as $alljudge)
            <div style="border:1px solid white;float:left"  class="a3">
                <img src="{{$alljudge->pic}}" width="50px" height="50px" >
                <p style="margin-left:10px;">{{$alljudge->username}}</p>
            </div>
            <div style="float:left;margin-left:20px;" class="a3">
                <p>{{$alljudge->judge}}</p><br>
                <p>{{$alljudge->addtime}}</p>
            </div>
            <div style="clear:both;border-top:1px solid #ccc;" class="a3"></div><br>
            @endforeach
        </div>
        <!-- 差评 -->
        <div id="goodsdetail_bad" style="display:none">
            <br>
            @if(!$judgelist['judgebad'])
                <div style="width:100%;height:50px;text-align:center" class="meiyou">
                    <p>对不起。没有评论</p>
                </div>
            @endif
            @foreach($judgelist['judgebad'] as $alljudge)
            <div style="border:1px solid white;float:left"  class="a4">
                <img src="{{$alljudge->pic}}" width="50px" height="50px" >
                <p style="margin-left:10px;">{{$alljudge->username}}</p>
            </div>
            <div style="float:left;margin-left:20px;" class="a4">
                <p>{{$alljudge->judge}}</p><br>
                <p>{{$alljudge->addtime}}</p>
            </div>
            <div style="clear:both;border-top:1px solid #ccc;" class="a4"></div><br>
            @endforeach
        </div>
    </div>
    <!-- 评论的js -->
    <script>
    function checkjudge(id){
        // 全部评论的样式和显示与隐藏
        if (id==0) {
            $('.CommentTab ul li').removeClass('active');
            $('#alljudge').addClass('active');
            $('#goodsdetail_comments_list_content div').css('display','none');
            $('#goodsdetail_all').css('display','block');
            $('.a1').css('display','block');
            // 显示没有评论的样式
            $('.meiyou').css('display','block');
            $('.comment_Number span b').html($('#alljudge b').html());
        }
        
        // 好评的样式和显示与隐藏
        if (id==1) {
            $('.CommentTab ul li').removeClass('active');
            $('#goodjude').addClass('active');
            $('#goodsdetail_comments_list_content div').css('display','none');
            $('#goodsdetail_good').css('display','block');
            $('.a2').css('display','block');
            $('.meiyou').css('display','block');
            $('.comment_Number span b').html($('#goodjude b').html());
        }
        // 一般的样式和显示与隐藏
        if (id==2) {
            $('.CommentTab ul li').removeClass('active');
            $('#ordinaryjudge').addClass('active');
            $('#goodsdetail_comments_list_content div').css('display','none');
            $('#goodsdetail_ordinary').css('display','block');
            $('.a3').css('display','block');
            $('.meiyou').css('display','block');
            $('.comment_Number span b').html($('#ordinaryjudge b').html());
        }
        // 差评的样式和显示与隐藏
        if (id==3) {
            $('.CommentTab ul li').removeClass('active');
            $('#badjudge').addClass('active');
            $('#goodsdetail_comments_list_content div').css('display','none');
            $('#goodsdetail_bad').css('display','block');
            $('.a4').css('display','block');
            $('.meiyou').css('display','block');
            $('.comment_Number span b').html($('#badjudge b').html());
        }
    }

    </script>
  <ul class="clearfix">
	  </ul>
  <div class="comment_page clearfix">
	<div class="comment_Number"> <span class="f_l f6" style="margin-right:10px;">共 <b>{{count($judgelist['judgeall'])}}</b> 条评论</span>
	  <div id="comment_Pager_Number" class="comment_Pager_Number"> 
	    
      </div>
	</div>
  </div>
</div>
</div>
<script language="javascript">
function updatenum(type){
    var qty = parseInt(document.forms['ECS_FORMBUY'].elements['number'].value);
    if(type == 'del'){
        if(qty > 1){
            document.forms['ECS_FORMBUY'].elements['number'].value = (qty - 1);
        }
    }else{
        document.forms['ECS_FORMBUY'].elements['number'].value = (qty + 1);
    }
    //changePrice();
}

function send_cooment(){
    $(".commentBox").toggle();
}
function checkLength(which) {
    var maxChars = 1000; //
    if(which.value.length > maxChars){
        alert("您出入的字数超多限制!");
        which.value = which.value.substring(0,maxChars);
        return false;
    }else{
        var curr = maxChars - which.value.length; //250 减去 当前输入的
        document.getElementById("sy").innerHTML = curr.toString();
        return true;
    }
}
</script>
@endsection
@section('title','产品详细页')
</script>
</div>
    </div>
   </div>
  </div>
</div>
