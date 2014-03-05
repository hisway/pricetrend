<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Apple 产品港版价格走势</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="./css/metro.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var box_h=$("#metro_box").height();
		var box_w=$("#metro_box").width();
		$("#metro_box").css("margin-top",(($(window).height()-box_h)/2)-10+"px");

		$(".a_link dd a").attr("target","_blank");
		$(".a_link ul li>a").hover(function(){
			var a_href=$(this).attr("href");			
			$(this).siblings().find("a").attr("href",a_href);
		});
		
	});
</script>
</head>
<body>

<!--logo区开始-->
<div id="metro_box" class="a_link">

  <dl>
    <dd style="display:none;"></dd>
  
   <dd style="display:bolck;">
      <ul>
      	
        <li class="one" id="logo_001">
          <a href="iphone5s">
            <img src="images/1.png" width="240" height="120" alt="iphone 5s">
                    </a>
          <span><a href="iphone5s">iphone 5s</a></span>
        </li>

        <li id="logo_002">
          <a href="iphone5c">
            <img src="images/2.png" width="240" height="120" alt="iphone 5c"></a>
            <span><a href="iphone5c">iphone 5c</a></span>
          </li>

        <li class="four" id="logo_003">
          <a href="ipadair">
            <img src="images/3.png" width="240" height="120" alt="iPad Air"></a>
            <span><a href="ipadair">iPad Air</a></span>
          </li>

        <li class="one" id="logo_004">
          <a href="ipadminiretina">
            <img src="images/4.png" width="240" height="120" alt="iPad Mini Retina"></a>
            <span><a href="ipadminiretina">iPad Mini Retina</a></span>
          </li>

        <li id="logo_005">
          <a href="rmba">
            <img src="images/7.png" width="240" height="120" alt="Macbook Air"></a>
            <span><a href="rmba">Macbook Air</a></span>
          </li>

        <li class="four" id="logo_006">
          <a href="rmbp">
          <img src="images/6.png" width="240" height="120" alt="Macbook Pro Retina"></a>
          <span><a href="rmbp">Macbook Pro Retina</a></span>
        </li>

        <li class="one" id="logo_007">
          <a href="ipadmini">
            <img src="images/5.png" width="240" height="120" alt="iPad Mini"></a>
            <span><a href="ipadmini">iPad Mini</a></span>
          </li>

        <li id="logo_008">
          <a href="imac">
          <img src="images/8.png" width="240" height="120" alt="iMac"></a>
          <span><a href="imac">iMac</a></span>
        </li>

        <li class="four" id="logo_009">
          <a href="macmini">
            <img src="images/9.png" width="240" height="120" alt="Mac Mini"></a>
            <span><a href="macmini">Mac Mini</a></span>
          </li>
      </ul>
    </dd>
  </dl>
  
 
</div>
<!--logo区结束--> 

</body>
</html>