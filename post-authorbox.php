<div class="p-normal mb-normal desktop:float-right desktop:w-64 mb-normal font-normal">
    <a href="<?=get_author_posts_url($author_id)?>" class="float-left">
         <?=get_avatar(get_the_author_meta('user_email', $author_id))?>
     </a>
	<a rel="author" href="<?=get_author_posts_url($author_id)?>" class="author-name">
		<?=get_the_author_meta('display_name', $author_id)?>
	</a>
	<div class="description">
        <?=get_the_author_meta('affiliation', $author_id); ?>
    </div>
	<a href="<?=get_author_posts_url($author_id)?>" class="view-all">View all posts by <?=get_the_author_meta('display_name', $author_id)?> &raquo;</a>
</div>