<?php
	require_once "views/navbar.php";
?>
<body>

 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(/SheekStore/img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Boutique</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catégories</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                  <li data-toggle="collapse" data-target="#clothing">
                                      <a href="/SheekStore/index.php/home/">Tous les produits</a>
                                  </li>
                                    <?php
                                      if(isset($categoriesListView)){
                                        foreach($categoriesListView as $category){
                                        echo '<!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#clothing">
                                            <a href="/SheekStore/index.php/home/getbycategory/'.$category['id'].'">'.$category['nom_categorie'].'</a>
                                        </li>';
                                      }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>
                                        	<?php echo $productsCount; ?>
                                        </span> produits trouvés</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row products-area">

						<?php

						foreach($ProductsListView as $product) {
                            echo '<!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="'.$product['img1'].'" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="'.$product['img2'].'" alt="">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>'.$product['nom_categorie'].'</span>
                                        <a href="single-product-details.html">
                                            <h6>'.$product['libelle'].'</h6>
                                        </a>
                                        <p class="product-price">'.$product['prix'].'€</p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                                <div class="add-to-cart-btn">
                                                    <form class="form-product" action="/SheekStore/index.php/cart" method="post">
											         <input name="id_product" type="hidden" value="'.$product['id'].'">
                                          		    <button type="submit" class="btn essence-btn">Ajouter au panier</button>
                                                </div>
                                                    </form>
                                               <div class="add-to-cart-btn">
                                                    <form class="form-product" action="/SheekStore/index.php/product_detail" method="get">
                                                     <input name="product" type="hidden" value="'.$product['id'].'">
                                                    <button type="submit" class="btn essence-btn">Details</button>
                                                </div>
                                                    </form>
                                        </div>
                                    </div>
                                </div>
								
                            </div>';
                           }
                        ?>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
    <!-- ##### New Arrivals Area End ##### -->

<?php
require_once "views/footer.php"
?>
    </body>
</html>
