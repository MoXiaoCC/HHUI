<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!-- end .row -->
</div>

<!--统计代码开始-->
<div style="display:none">
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1263256397'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1263256397' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
<!--统计代码结束-->



<footer role="contentinfo" class="uk-card uk-card-secondary uk-card-body">
<div id="footer">
   <div class="uk-child-width-1-1 uk-grid uk-text-center">
	   <div class="icon">
		<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
		<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
		<a href="" class="uk-icon-button" uk-icon="google-plus"></a>
		<a href="#" uk-totop uk-scroll></a>
	   </div>
   </div>


   <p class="uk-text-center">
   
    <?php _e('Use <a href="http://www.typecho.org">Typecho</a> '); ?> Theme By <a href="https://liuxiaogang.cn">HHUI </a><br>
   &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. <?php $this->options->beian() ?></p> 
	
	
</div>

</footer><!-- end #footer -->

    <script src="<?php $this->options->themeUrl('js/uikit.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/uikit-icons.min.js'); ?>"></script>

<?php $this->footer(); ?>
</body>
</html>
