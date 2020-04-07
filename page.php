<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="">
    <article>
        <h2 class="post-title"><?php $this->title() ?></h2>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<!--?php $this->need('sidebar.php'); ?-->
<?php $this->need('footer.php'); ?>
