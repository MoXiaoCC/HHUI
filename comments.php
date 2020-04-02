<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
 

<article id="li-<?php $comments->theId(); ?>" class="uk-comment uk-comment-primary comment-body<?php 
if ($comments->_levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass; 
?>">
    <header id="<?php $comments->theId(); ?>" class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <!--img class="uk-comment-avatar" src="/skin/ukv3/images/avatar.jpg" width="80" height="80" alt=""-->
			<?php $comments->gravatar('40', ''); ?>
        </div>
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><?php $comments->author(); ?></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a></li>
                <li><?php $comments->reply(); ?></li>
            </ul>
        </div>
    </header>
    <div class="uk-comment-body">
        <p><?php $comments->content(); ?></p>
    </div>

<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</article>
 
<?php } ?>









<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
		<div class="uk-width-1-1 uk-display-block">
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p class="uk-width-1-3">
                <label for="author" class="required"></label>
    			<input type="text" name="author" id="author" class="text uk-input" placeholder="*<?php _e('称呼'); ?>" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p class="uk-width-1-3">
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>></label>
    			<input type="email" name="mail" id="mail" class="text uk-input" placeholder="*<?php _e('Email'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p class="uk-width-1-3">
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>></label>
    			<input type="url" name="url" id="url" class="text uk-input" placeholder="<?php _e('网站'); ?> <?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p style="padding: 5px;">
                <label for="textarea" class="required"></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="uk-textarea" placeholder="<?php _e('内容'); ?>" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p style="padding: 5px;">
                <button type="submit" class="submit uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
		</div>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
