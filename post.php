<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post">
        <div class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
        <ul class="post-meta">
            <li><?php _e('作者：'); ?><?php $this->author(); ?></li>
            <li><?php _e('时间：'); ?><?php $this->date('F j, Y'); ?></li>
            <li><?php _e('分类：'); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        <p class="tags"><?php _e('标签：'); ?><?php $this->tags(' / ', true, 'none'); ?></p>
        <p id="entry_cr">
        <img alt="知识共享许可协议" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /><br />
        版权声明：本文版权属于作者 <?php $this->author(); ?>，并受法律保护。<br />
        本作品采用知识共享「<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank">署名 - 非商业性使用 - 相同方式共享 3.0 未本地化版本</a>」许可协议进行许可。
        </p>
    </article>

    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
