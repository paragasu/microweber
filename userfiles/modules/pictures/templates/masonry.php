<?php

/*

type: layout

name: Masonry

description: Masonry

*/

  ?>
<?php if(is_array($data )): ?>

<?php  $rand = uniqid(); ?>

<script>mw.require("tools.js", true); </script>
<script>mw.require("<?php print $config['url_to_module']; ?>js/masonry.pkgd.min.js", true); </script>
<script>mw.require("<?php print $config['url_to_module']; ?>css/style.css", true); </script>
<script>
    mw._masons = mw._masons || [];
    $(document).ready(function(){
        var m = mw.$('#mw-gallery-<?php print $rand; ?>');
        m.masonry({
          "itemSelector": '.masonry-item',
          "gutter":5
        });
        mw._masons.push(m);
        if(typeof mw._masons_binded === 'undefined'){
            mw._masons_binded = true;
            mw.onLive(function(){
               setInterval(function(){
                 var l = mw._masons.length, i=0;
                 for( ; i<l; i++){
                   var _m = mw._masons[i];
                   if(mw.$(".masonry-item", _m[0]).length > 0){
                       _m.masonry({
                          "itemSelector": '.masonry-item',
                          "gutter":5
                       });
                   }
                 }
               }, 500);
            });
        }
    });
</script>

<div class="mw-images-template-masonry" id="mw-gallery-<?php print $rand; ?>" style="position: relative;width: 100%;" >

  <?php foreach($data  as $item): ?>

    <div class="masonry-item" style="width: 19%;margin-bottom: 5px;box-shadow: 0 2px 2px;">
        <img src="<?php print thumbnail( $item['filename'], 300); ?>" width="100%" />
    </div>

  <?php endforeach;  ?>
</div>

<?php else : ?>
<?php endif; ?>