<!DOCTYPE HTML>
<html>
<head>
	<title>Apple 产品港版价格走势-添加报价</title>
	<link rel="stylesheet" href="./style.css" media="screen" type="text/css" />
	<link href="./font-awesome.css" rel="stylesheet">
</head>
<body>
	<ul id="breadcrumb">
		<li><a href="<?php echo base_url() ?>"><span class="icon icon-home"></span></a></li>
		<li><a href="add"><span class="icon "> </span>添加报价</a></li>
		<li><a href="iphone5s"><span class="icon icon-apple"></span> iphone 5s</a></li>
		<li><a href="iphone5c"><span class="icon icon-apple"></span> iphone 5c</a></li>
		<li><a href="ipadair"><span class="icon icon-apple"></span> iPad Air</a></li>
		<li><a href="ipadminiretina"><span class="icon icon-apple"></span> iPad Mini Retina</a></li>
		<li><a href="ipadmini"><span class="icon icon-apple"></span> iPad Mini</a></li>
		<li><a href="rmbp"><span class="icon icon-apple"></span> Macbook Pro Retina</a></li>
		<li><a href="rmba"><span class="icon icon-apple"></span> Macbook Air Retina</a></li>
		<li><a href="imac"><span class="icon icon-apple"></span> iMac</a></li>
		<li><a href="macmini"><span class="icon icon-apple"></span> Mac Mini</a></li>
	</ul>

	<div>
		<form action="add/handle/ip5s" >
			<table>
				<tr>
					<td width="150">iphone 5s</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="gray">灰色</option>
							<option value="gold">金色</option>
						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
						<input type="radio" name="size" value=64 />64G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0 <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>

	<div>
		<form action="add/handle/ip5c" >
			<table>
				<tr>
					<td width="150">iphone 5c</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="red">红色</option>
							<option value="yellow">黄色</option>
							<option value="blue">蓝色</option>
							<option value="green">绿色</option>
						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>




	<div>
		<form action="add/handle/iair" >
			<table>
				<tr>
					<td width="150">iPad Air WiFi</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="black">黑色</option>

						</select>
						<!-- <input type="radio" name="color" value="white" checked/>白色
						<input type="radio" name="color" value="black" />黑色 -->
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	<div>
		<form action="add/handle/iair4" >
			<table>
				<tr>
					<td width="150">iPad Air 4G+WiFi</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="black">黑色</option>

						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>

	

	<div>
		<form action="add/handle/ipadmire" >
			<table>
				<tr>
					<td width="150">iPad Mini Retina WiFi</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="black">黑色</option>

						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	<div>
		<form action="add/handle/ipadmire4" >
			<table>
				<tr>
					<td width="150">iPad Mini Retina 4G+WiFi</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="black">黑色</option>

						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	<div>
		<form action="add/handle/ipadmi" >
			<table>
				<tr>
					<td width="150">iPad Mini WiFi</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="black">黑色</option>

						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	<div>
		<form action="add/handle/ipadmi4" >
			<table>
				<tr>
					<td width="150">iPad Mini 4G+WiFi</td>
					<td>
						<select name="color" id="color">
							<option value="white">白色</option>
							<option value="black">黑色</option>

						</select>
					</td>
					<td>
						<input type="radio" name="size" value=16 checked/>16G
						<input type="radio" name="size" value=32 />32G
					</td>
					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	



	<div>
		<form action="add/handle/rmbp" >
			<table>
				<tr>
					<td width="150">Macbook Pro Retina</td>
					<td>
						<select name="color" id="color">
							<option value="ME864">ME864</option>
							<option value="ME865">ME865</option>
							<option value="ME866">ME866</option>
							<option value="ME293">ME293</option>
							<option value="ME294">ME294</option>
						</select>
					</td>

					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	<div>
		<form action="add/handle/rmba" >
			<table>
				<tr>
					<td width="150">Macbook Air Retina</td>
					<td>
						<select name="color" id="color">
							<option value="MD711">MD711</option>
							<option value="MD712">MD712</option>
							<option value="MD760">MD760</option>
							<option value="MD761">MD761</option>
						</select>
					</td>

					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>


	<div>
		<form action="add/handle/imac" >
			<table>
				<tr>
					<td width="150">iMac</td>
					<td>
						<select name="color" id="color">
							<option value="ME086">ME086</option>
							<option value="ME087">ME087</option>
							<option value="ME088">ME088</option>
							<option value="ME089">ME089</option>
						</select>
					</td>

					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>



	<div>
		<form action="add/handle/macmi" >
			<table>
				<tr>
					<td width="150">Mac Mini</td>
					<td>
						<select name="color" id="color">
							<option value="MD387">MD387</option>
							<option value="MD388">MD388</option>

						</select>
					</td>

					<td>
						日期<input type="text" name="time" value=<?php echo date("Y-m-d",time()) ?> />
					</td>
					<td>
						<input type="radio" name="ap" value=1 checked/>早价
						<input type="radio" name="ap" value=0  <?php if (date("A",time()-5*3600) == "PM") echo "checked" ?> />晚价
					</td>
					<td>
						<input type="text" name="price"/>
					</td>
					<td>
						<input type="submit" value="提交"/>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<hr>


</body>
</html>