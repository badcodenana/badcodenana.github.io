<!--insert these in head tag-->
<link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>assets/css/socio.css" />
<script src="<?php $_SERVER['SERVER_NAME']; ?>assets/js/socio.js"></script>

<!--insert these in body where you want the buttons to display-->
<ul class="badcode-socio-share"><li class="tab"> <a href="http://twitter.com/share?text=<?php comment(); ?>&url=<?php url(); ?>&hashtags=<?php hashtags(); ?>" target="<?php target() ?>"> <i class="fab fa-twitter <?php shape(); ?>"></i> <span class="screen-reader">Twitter</span> </a></li><li class="tab"> <a href="https://www.facebook.com/sharer/sharer.php?u=<?php url(); ?>" target="<?php target() ?>"> <i class="fab fa-facebook-f <?php shape(); ?>"></i> <span class="screen-reader">Facebook</span> </a></li><li class="tab"> <a href="https://plus.google.com/share?url=<?php url(); ?>" target="<?php target() ?>"> <i class="fab fa-google-plus-g <?php shape(); ?>"></i> <span class="screen-reader">Google+</span> </a></li><li class="tab"> <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php url(); ?>&title=title&summary=<?php comment(); ?>&source=source" target="<?php target() ?>"> <i class="fab fa-linkedin-in <?php shape(); ?>"></i> <span class="screen-reader">LinkedIn</span> </a></li></ul><div style="clear:both"></div>