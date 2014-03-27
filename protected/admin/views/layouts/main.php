<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>后台管理系统</title>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
		<?php Yii::app()->clientScript->registerCoreScript('jquery');?>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->beginContent('//layouts/header'); ?>
		<?php $this->endContent(); ?>
		<div class="container">
			<div class="row">
		<?php $this->beginContent('//layouts/menu'); ?>
		<?php $this->endContent(); ?>
			</div>
		</div>
	</body>
</html>