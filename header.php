<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
<meta name="google-site-verification" content="ZqsHd7YKgIUqtAUIOAAz3XuE-jYmN6mATJp4tTLcoZs" />
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#313131" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/uikit.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('icon/iconfont.css"'); ?>">
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->


<header>

<div class="header" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
		<div class="uk-navbar-left">
				<?php if ($this->options->logoUrl): ?>
					<a id="logo" href="<?php $this->options->siteUrl(); ?>">
						<img src="<?php $this->options->logoUrl() ?>" class="logo" alt="<?php $this->options->title() ?>" />
					</a>
				<?php else: ?>
					<a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
				<?php endif; ?>
				
		</div>
		
		
	   <div class="uk-navbar-right">

	   
			<ul class="uk-navbar-nav">
				<li<?php if($this->is('index')): ?> class="uk-active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				<li<?php if($this->is('page', $pages->slug)): ?> class="uk-active"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</nav>
 </div>

</header>


<div class="container">
    <div class="main">