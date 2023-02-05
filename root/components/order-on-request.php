<section class="order-on-request mt-5 mb-5">
    <div class="container">
        <div class="title text-center">
            <p class="text-danger fw-semibold">KHÁCH HÀNG ĐẶT</p>
            <h4 class="fs-1  fw-bold">Mẫu hoa theo yêu cầu</h4>
            <p class="">Bạn có ý tưởng nhưng không biết thực hiện như thế nào? <br>
                Hãy để hoa tươi Bảo Hân giúp bạn hoàn thành ý tưởng đó của bạn ♡</p>
        </div>
		<div class="products row p-2">
            <?php
            for ($i = 0 ; $i < 4 ; $i++) {
                ?>
				<div class="col-sm-3 col-6 mb-4">
					<div class="item">
						<a href="#" class="search text-center p-2 m-2"><i class='bx bx-search'></i></a>
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
					</div>
				</div>
                <?php
            }
            ?>
		</div>
    </div>
</section>