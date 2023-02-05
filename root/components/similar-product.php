<section class="mt-5 mb-5">
    <div class="container">
        <h4>Sản phẩm tương tự</h4>
        <div class="underlined"></div>
        <div class="similar-products row mt-5 mb-5">
            <?php
            for ($i = 0 ; $i < 4 ; $i++) {
                ?>
                <div class="col-sm-3 col-6 mb-4">
                    <div class="item">
                        <div class="card border-0">
                            <a href="#"><img src="<?= ASSETS ?>/images/bo-hong-do-600x600.jpg" alt="flowers-banner-large-min" class="img-fluid"></a>
                            <div class="card-body text-center">
                                <div class="item-title">
                                    <a href="#" class="text-decoration-none">Bó hoa tặng em</a>
                                </div>
                                <div class="item-price">
                                    <span class="text-success">700,000đ</span>
                                </div>
                            </div>
                        </div>
	                    <a href="#" class="search text-center p-2"><i class='bx bx-search'></i></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
