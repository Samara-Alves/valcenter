


function video_embed_responsivo( $html ) 
{
return '<div class="container-video">' . $html . '</div>';
}
add_filter( 'embed_embed_html', 'video_embed_responsivo', 10, 3 );
add_filter( 'video_embed_html', 'video_embed_responsivo' );