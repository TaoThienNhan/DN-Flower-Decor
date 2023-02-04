<section class="blogs mt-5 mb-5">
    <div class="container">
	    <div class="title text-center">
		    <p class="text-danger fw-semibold">Blogs</p>
		    <h4 class="fs-1  fw-bold">Lời của hoa</h4>
		    <p class="">Cùng tìm hiểu về các loài hoa, ý nghĩa của từng loại hoa, <br>
			    để khi bạn muốn mua hoa tặng ai đó, bạn sẽ biết chọn hoa phù hợp hơn!</p>
	    </div>
	    <div class="row blogs-box">
		    <?php
		        for ($i = 0 ; $i < 3 ; $i++) {
					?>
			        <div class="col-sm-4">
				        <div class="item position-relative">
					        <div class="item-images">
						        <a href="#"><img src="<?= ASSETS ?>/images/hoa-sinh-nhat-gia-re-quan-tan-binh.jpg" alt="hoa-sinh-nhat-gia-re-quan-tan-binh" class="img-fluid"></a>
					        </div>
					        <div class="content position-absolute text-center text-light">
						        <p>Đặt hoa tươi sinh nhật quận Tân Bình Bảo Hân giá rẻ giao hàng miễn phí</p>
					        </div>
				        </div>
			        </div>
		            <?php
		        }
		    ?>
	    </div>
    </div>
</section>
