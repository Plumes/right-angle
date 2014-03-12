<?php
/**
 * 这是适用于 Typecho 0.9 系统的一套皮肤
 * 
 * @package Typecho Right-angle Theme 
 * @author Plumes
 * @version 1.0
 * @link http://blog.summerecho.com
 */
 
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post">
			<div class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
			<ul class="post-meta">
				<li><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>
				<li><?php _e('时间：'); ?><?php $this->date('F j, Y'); ?></li>
				<li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
				<li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content">
    			<?php $this->content('阅读全文'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
