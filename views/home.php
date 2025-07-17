 <?php
    global $dssp;
    $html_new_product="";
    foreach ($dssp as $item) {
      extract($item);
      $html_new_product.='<section class="products">
                              <h2>Sản Phẩm</h2>
                              <div class="product-list">
                                <div class="product">
                                  <a href="#">
                                    <img src="'.URL_IMG.$image.'" alt="anh sp" />
                                    <p>'.$name.'</p>
                                    <span class="price">'.$price.' ₫</span></a
                                  >
                                </div>
                              </div>
                            </section>';
                            echo $html_new_product;
    }
 ?>
 
 <!-- Danh mục -->
    <!-- <section class="categories">
      <h2>Danh mục sản phẩm</h2>
      <div class="category-list">
        <div>
          <img src="/DuAnMau/public/img/2.png" alt="" />
          <p>Áo phông</p>
        </div>
        <div>
          <img src="/DuAnMau/public/img/3.png" alt="" />
          <p>Áo Polo</p>
        </div>
        <div>
          <img src="/DuAnMau/public/img/4.png" alt="" />
          <p>Sơ mi</p>
        </div>
        <div>
          <img src="/DuAnMau/public/img/5.png" alt="" />
          <p>Quần short</p>
        </div>
        <div>
          <img src="/DuAnMau/public/img/2.png" alt="" />
          <p>Túi</p>
        </div>
      </div>
    </section> -->

    <!-- Sản phẩm -->

    <!-- Sản phẩm bán chạy -->
    <section class="products">
      <h2>Sản Phẩm Bán Chạy</h2>
      <div class="product-list">
        <div class="product">
          <img src="/DuAnMau/public/img/2.png" alt="" />
          <p>Quần short kaki</p>
          <span class="price">389.000 ₫</span>
        </div>
        <div class="product">
          <img src="/DuAnMau/public/img/2.png" alt="" />
          <p>Quần short kaki</p>
          <span class="price">329.000 ₫</span>
        </div>
        <div class="product">
          <img src="/DuAnMau/public/img/2.png" alt="" />
          <p>Quần short kaki</p>
          <span class="price">449.000 ₫</span>
        </div>
        <div class="product">
          <img src="/DuAnMau/public./img/2.png" alt="" />
          <p>Quần short kaki</p>
          <span class="price">279.000 ₫</span>
        </div>
      </div>
    </section>