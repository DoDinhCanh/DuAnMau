 <?php
global $dssp;
global $dsdm;
?>
 
 <!-- Danh mục -->
    <section class="categories">
      <h2>Danh mục sản phẩm</h2>
      <div class="category-list">
        <?php
        $html_dm = "";
        foreach ($dsdm as $item) {
          extract($item);
          $html_dm .= '<div>
          <img src="' . URL_IMG . $image . '" alt="" />
          <p>'.$name.'</p>
        </div>';
        }
        echo $html_dm
        ?>
        
      </div>
    </section>
    <!-- Sản phẩm -->
<section class="products">
  <h2>Sản Phẩm</h2>
  <div class="product-list">
    <?php
    $html_sp = "";
    foreach ($dssp as $item) {
      extract($item);
      $html_sp .= '
        <div class="product">
          <a href="#">
            <img src="' . URL_IMG . $image . '" alt="anh sp" />
            <p>' . $name . '</p>
            <span class="price">' . $price . ' ₫</span>
          </a>
        </div>
      ';
    }
    echo $html_sp;
    ?>
  </div>
</section>
    <!-- Sản phẩm bán chạy -->
    <!-- <section class="products">
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
    </section> -->