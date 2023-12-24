<section class="project-wrapper">
    <div class="row project-carousel col-12">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <a class="col-12 col-xl-4 col-md-4" href="">
                <div class="project-item">
                    <div class="background" style="background-image: url(<?= get_theme_file_uri('assets/images/img1.jpg') ?>)"></div>
                    <div class="content">
                        <div class="date">Hoàn thành ngày: 21.01.2023</div>
                        <div class="title">Dự án điện NLMT KCN VSIP</div>
                        <button class="view-btn">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </a>
        <?php endfor; ?>
    </div>
    <div style="background: var(--Background-Green, #ECF2F0);">
        <div class="view-more-btn">
            <a href="/du-an">
                <span>
                    Xem thêm các dự án do Vestek thực hiện
                </span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>