<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>asdsa</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action-target="http://file.api.weixin.qq.com/cgi-bin/media/upload" target="result-iframe" form-method="POST" form-type="args" return-type="json" enctype="multipart/form-data">
				
			
				<div class="inputDiv">
					
						<span class="red">*</span> 
					
					<span class="name">access_token : </span>
					<input type="text" reserved-name="access_token" method="GET" data-type="string" required="true" sync="true">
					<span class="tips">调用接口凭证</span>
					<span class="errMsg green">校验通过</span>
					<br>
				</div>					
			
				<div class="inputDiv">
					
						<span class="red">*</span> 
					
					<span class="name">type : </span>
					<select reserved-name="type" method="GET" data-type="selector" required="true">
				
					<option value="image">image</option>
				
					<option value="voice">voice</option>
				
					<option value="video">video</option>
				
					<option value="thumb">thumb</option>
				
				</select>
					<span class="tips">媒体文件类型，分别有图片（image）、语音（voice）、视频（video）和缩略图（thumb）</span>
					<span class="errMsg"></span>
					<br>
				</div>					
			
				<div class="inputDiv">
					
						<span class="red">*</span> 
					
					<span class="name">media : </span>
					<input type="file" name="media" method="POST" data-type="file" required="true">
					<span class="tips">form-data中媒体文件标识，有filename、filelength、content-type等信息</span>
					<span class="errMsg"></span>
					<br>
				</div>					
			
		
				<input type="submit" class="unsubmit" id="submit" value="检查问题">
			</form>
</body>
</html>