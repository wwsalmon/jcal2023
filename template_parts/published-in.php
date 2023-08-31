<?php
$publication_logo = get_post_meta(get_the_ID(), "publication_logo", true);

if ($publication_logo):
    $publication_logo_url = wp_get_attachment_url($publication_logo);
    if ($publication_logo_url):
?>
    <div class="mt-4 md:mt-6 pt-4 md:pt-6 border-t border-white/25 flex items-center gap-4">
        <span class="opacity-50 text-sm">Published with</span>
        <img src="<?php echo $publication_logo_url ?>" alt="" class="h-6 md:h-8"/>
    </div>
<?php endif; endif; ?>