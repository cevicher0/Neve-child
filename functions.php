<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function ads_unit2($content){
    if(!is_single()){
        return $content;
    }else{
 
/* 記事本文の前の広告コード Start */
        $adsCodeBeforeContent=<<<EOC
<!-- Adsense Code Start -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-5377346924365443"
    data-ad-slot="7888650778"
    data-ad-format="auto"
    data-full-width-responsive="false"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- Adsense Code End -->
EOC;
/* 記事本文の前の広告コード End */
 
/* 記事本文の後の広告コード Start */
        $adsCodeAfterContent=<<<EOC
<!-- Adsense Code Start -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 記事下1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5377346924365443"
     data-ad-slot="4110485031"
     data-ad-format="auto"
     data-full-width-responsive="false"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- Adsense Code End -->
EOC;
/* 記事本文の後の広告コード End */
 
        return $adsCodeBeforeContent.$content.$adsCodeAfterContent;
    }
}
add_filter('the_content','ads_unit2');