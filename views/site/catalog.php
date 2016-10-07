<?php include ROOT.TMPL.'header.php'; //подключаем header?> 
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
                               <?php foreach ($categories as $categoryItem): //перебираем массив категорий и выводим на страницу сайта?> 
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?> </a></h4>
                                        </div>
                                    </div>
                                <?php endforeach; // конец перебота массива категорий ?> 
                            </div>
                            <?php /* echo $categories2; выводим дерево категорий */?> 
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последние товары</h2>
                            <?php foreach ($latestProduct as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo $product['image']; ?>" alt="" />
                                            <h2>$<?php echo $product['price']; ?></h2>
                                            <p><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></p>
                                            <a href="#" data-id="<?php echo $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if($product['is_new']): ?>
                                            <img src="<?php echo TMPL; ?>/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?> 
                        </div><!--features_items-->
                    </div>
                </div>
            </div>
        </section>
<?php include ROOT.TMPL.'footer.php'; //подключаем footer?>