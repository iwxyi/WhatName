<?php
session_start();

if (!isset($_SESSION['user_id'])) {
	// header("Location: index.php"); // 重定向到登录页面
	// exit; // 确保后续的代码不会被执行
}
?>
<HTML>
<head>
	<title>发布兼职信息</title>
	<link rel="stylesheet" href="css/mdui.min.css">
	<script src="js/mdui.min.js"></script>
</head>
<body style="width:350px;margin:0 auto;margin-top: 100px;">
	<div class="mdui-card">
		<!-- 卡片头部，包含头像、标题、副标题 -->
		<div class="mdui-card-header">
			<img class="mdui-card-header-avatar" src="img/avatar.jpg"/>
			<div class="mdui-card-header-title">Title</div>
			<div class="mdui-card-header-subtitle">Subtitle</div>
		</div>

		<!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
		<div class="mdui-card-media">
			<img src="img/card.jpg"/>
			<!-- 卡片中可以包含一个或多个菜单按钮 -->
			<div class="mdui-card-menu">
				<button class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon material-icons">share</i></button>
			</div>
		</div>

		<!-- 卡片的标题和副标题 -->
		<div class="mdui-card-primary">
			<div class="mdui-card-primary-title">Title</div>
			<div class="mdui-card-primary-subtitle">Subtitle</div>
		</div>

		<!-- 卡片的内容 -->
		<div class="mdui-card-content">子曰：「学而时习之，不亦说乎？有朋自远方来，不亦乐乎？人不知，而不愠，不亦君子乎？」</div>

		<!-- 卡片的按钮 -->
		<div class="mdui-card-actions">
			<button class="mdui-btn mdui-ripple">action 1</button>
			<button class="mdui-btn mdui-ripple">action 2</button>
			<button class="mdui-btn mdui-btn-icon mdui-float-right"><i class="mdui-icon material-icons">expand_more</i></button>
		</div>

	</div>
</body>
</HTML>