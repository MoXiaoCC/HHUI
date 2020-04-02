<?php
/**
 * HHUI
 * 
 * @package HHUI 
 * @author LiuXiaogang
 * @version 0.1
 * @link https://liuxiaogang.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>



<div>

<div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
	<?php while($this->next()): ?>
	

    <div>
	<a itemprop="url" href="<?php $this->permalink() ?>">
        <div class="uk-card uk-card-default tm-image-card">
			<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
			<div class="uk-card-media-top"><!-- 关闭所有缩略图显示 -->
			<?php else: ?>
			<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?>
			<a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a> <!-- 有图文章显示缩略图，无图文章则不显示缩略图 -->
			<?php else: ?>
            <div class="uk-card-media-top" style="background-image: url('<?php showThumbnail($this); ?>');
			background-size: cover;background-repeat: no-repeat;background-position:center center;width:100%;height:220px">
			<?php endif; ?>
			<?php endif; ?>
            </div>

			
            <div class="uk-card-body">
                <h3 class="uk-card-title"><?php $this->title() ?></h3>
				 <p class="uk-text-meta uk-margin-remove-top">
				 <?php _e('分类: '); ?><?php $this->category(','); ?>
				 
				 <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
				 </p>
                <p class="zuozhe"><?php _e('作者: '); ?><?php $this->author(); ?> 浏览量：9999 | <?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></p>
				<!--?php $this->content('- 阅读剩余部分 -'); ?-->
            </div>
        </div>
	</a>
    </div>


	<?php endwhile; ?>
	</div>

    <!--?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?-->
	
	
	<?php $this->pageNav('<<', '>>',10,'',array('wrapTag' => 'ul', 'wrapClass' => 'uk-pagination uk-flex-center','itemTag' => 'li','currentClass' => 'uk-active',)); ?>

	
</div><!-- end #main-->

<!--?php $this->need('sidebar.php'); ?-->
<?php $this->need('footer.php'); ?>
