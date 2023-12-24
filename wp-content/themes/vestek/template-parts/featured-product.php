<section class="featured-product-wrapper">
    <div class="container">
        <div class="row">
            <div class="title" style="background-image: url(<?= get_theme_file_uri('assets/images/featured.png') ?>)">
                <div>
                    | Sản phẩm nổi bật
                </div>
            </div>
            <div class="view-more">
                <div class="px-2" style="place-self:center; text-wrap: nowrap">Xem thêm</div>
                <div class="circle">
                    <a href="/san-pham">
                        <div class="btn">
                            <svg width="32px" height="32px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFF" d="M17.707 9.293l-5-5a.999.999 0 10-1.414 1.414L14.586 9H3a1 1 0 100 2h11.586l-3.293 3.293a.999.999 0 101.414 1.414l5-5a.999.999 0 000-1.414z" fill="#5C5F62" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-12 col-lg-3">
                    <?php
                    get_template_part('template-parts/single/product-item');
                    ?>
                </div>
            <?php endfor;
            ?>
        </div>
    </div>
</section>