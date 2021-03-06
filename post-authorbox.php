<div class="p-normal mb-normal desktop:float-right desktop:w-aside mb-normal font-normal text-xs clear-right leading-normal">
    <a href="<?=get_author_posts_url($author_id)?>" class="float-right ml-small mb-small">
         <?=get_avatar(get_the_author_meta('user_email', $author_id))?>
     </a>
	<a rel="author" href="<?=get_author_posts_url($author_id)?>" class="author-name text-base font-bold no-underline mb-small text-inherit block">
		<?=get_the_author_meta('display_name', $author_id)?>
	</a>
	<div class="description">
        <?=get_the_author_meta('affiliation', $author_id); ?>
    </div>
	<a href="<?=get_author_posts_url($author_id)?>" class="block mt-small font-bold text-inherit no-underline hover:underline">View all posts by <?=get_the_author_meta('display_name', $author_id)?> &raquo;</a>
</div>