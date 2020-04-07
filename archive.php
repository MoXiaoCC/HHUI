<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="">

<div class="indexcategorylist">
	<a class="" href="<?php $this->options->siteUrl(); ?>"> 全部 </a>
<?php $this->widget('Widget_Metas_Category_List')->to($category);?>
<?php while ($category->next()):?>
<a <?php if($this->is('post')):?>
<?php if($this->category == $category->slug):?>class="indexcategory"<?php endif;?>
<?php else:?>
<?php if($this->is('category', $category->slug)):?>class="indexcategory"<?php endif;?>
<?php endif;?> href="<?php $category->permalink();?>"><?php $category->name();?>
</a>
<?php endwhile; ?>


</div>

<div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>

    <div>
	<a itemprop="url" href="<?php $this->permalink() ?>" class="permalink">
        <div class="uk-card uk-card-default tm-image-card">
			<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
			<div class="uk-card-media-top"><!-- 关闭所有缩略图显示 -->
			<?php else: ?>
			<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?>
			<?php showThumbnail($this); ?><!-- 有图文章显示缩略图，无图文章则不显示缩略图 -->
			<?php else: ?>
            <div class="uk-card-media-top" style="background-image: url('<?php showThumbnail($this); ?>');
			background-size: cover;background-repeat: no-repeat;background-position:center center;width:100%;height:220px;border-radius: 5px 5px 0 0;">
			<?php endif; ?>
			<?php endif; ?>
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title"><?php $this->title() ?></h3>
				 <p class="uk-text-meta uk-margin-remove-top">
				 <?php _e('分类: '); ?><?php $this->category(','); ?>
				 <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
				 <br>
				 <?php _e('作者: '); ?><?php $this->author(); ?> | 浏览量：<?php get_post_view($this) ?> | <?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?>
				<!--?php $this->content('- 阅读剩余部分 -'); ?-->
				</p>
            </div>
        </div>
	</a>
    </div>

			
    	<?php endwhile; ?>
        <?php else: ?>
                <h2 class="nobody"><?php _e('没有找到内容'); ?></h2>
        <?php endif; ?>
</div><!-- end #main-->
		
	<?php $this->pageNav('<<', '>>',10,'',array('wrapTag' => 'ul', 'wrapClass' => 'uk-pagination uk-flex-center','itemTag' => 'li','currentClass' => 'uk-active',)); ?>

		
    </div><!-- end #main -->

	<!--?php $this->need('sidebar.php'); ?-->
	<?php $this->need('footer.php'); ?>
	
