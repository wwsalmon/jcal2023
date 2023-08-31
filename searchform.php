<form action="<?php echo home_url("")?>" method="get">
	<input type="text" name="s" class="p-2 border" id="search" placeholder="Search query..." value="<?php the_search_query(); ?>" />
	<input type="submit" value="Search" class="p-2 bg-tyellow uppercase font-black"/>
</form>