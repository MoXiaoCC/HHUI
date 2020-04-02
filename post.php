<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class=" ">
    <article>
        <h2 class="post-title"><?php $this->title() ?></h2>
		 <p class="uk-article-meta">
			<?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
			| <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
			| <?php _e('分类: '); ?><?php $this->category(','); ?>
			<?php if($this->user->hasLogin()): ?>
			| <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php $this->cid(); ?>" target="_blank">编辑</a>
			<?php else: ?>
			<?php endif; ?>
		 </p>
			
		
		
		
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>

	
</div><!-- end #main-->
<!--?php $this->need('sidebar.php'); ?-->
<?php $this->need('footer.php'); ?>
