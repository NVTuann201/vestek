<section class="team-wrapper">
    <div class="team-header">
        <div class="team-title-wrapper" style="background-image: url(<?= get_theme_file_uri('assets/images/team.png') ?>)">
            <div class="team-title">| Các chuyên gia của Vestek</div>
        </div>
        <div class="team-desc">
            Chúng tôi có những nhân sự chuyên nghiệp nhất
        </div>
    </div>
    <div class="team-carousel row">
        <?php for ($i = 0; $i < 12; $i++) : ?>
            <div class="col-12 col-xl-2">
                <div class="team-item">
                    <div class="team-avatar" style="background-image: url(<?= get_theme_file_uri('assets/images/team-mem.png') ?>)"></div>
                    <div class="team-detail">
                        <div class="team-name">Nguyễn Văn A</div>
                        <div class="team-position">Giám đốc</div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>