<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: shop layout
position: 4
*/


?>
<?php include template_dir() . "header.php"; ?>
<script>
    mw.lib.require('bootstrap3');
    mw.lib.require('bootstrap_datepicker');
    $(document).ready(function () {
        $('input.datepicker').datepicker();
    });
</script>

<div class="edit" field="electron_content" rel="content">
    <module type="layouts" template="skin-8"/>

    <div class="container-fluid nodrop">
        <div class="white-wrapper">
            <div class="container p-t-40 p-b-40">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-title waves center edit" rel="page" field="title">Our products</h1>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-xs-12">
                    <div class="edit" field="content" rel="page"></div>
                </div>

                <div class="edit" field="content-shop" rel="page">
                    <module type="shop/products" limit="18" template="default" description-length="500"/>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
