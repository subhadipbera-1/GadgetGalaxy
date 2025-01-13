<?php
    // include('headerlink.php');
    // include('header.php');
    // include('user_function.php');
    // $product_id=$_GET['productid'];
    // $id=$_SESSION['id'];
    // $product=getproductid($product_id);

    
    
  

    include('headerlink.php');
    include('header.php');
    include('user_function.php');
    
    $product_id = $_GET['productid'];
    $id = $_SESSION['id'] ?? ''; // Assign an empty string if 'id' is not set in the session




?>
      
<div class="container" style=" background-color: #fff; padding: 11px;">
    <div class="row">
        <div class="preview col-md-6">
        <?php
            $alldata = Displayproduct($product_id);
            if (isset($alldata)) {
            foreach ($alldata as $data){
        ?>
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="product_images/<?php echo $data['image']; ?>" /></div>
              <!-- <div class="tab-pane" id="pic-2"><img src="assets/img/earbud2.jpeg" /></div>
              <div class="tab-pane" id="pic-3"><img src="assets/img/earbud3.jpeg" /></div>
              <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> -->
            </div>
            <!-- <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="assets/img/earbud1.jpeg" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="assets/img/earbud2.jpeg"></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="assets/img/earbud3.jpeg"></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
            </ul> -->
            
          </div>
        <div class="col-lg-6 order-3">
            <div class="product_description">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="all-catagory.php">Products</a></li>
                        <li class="breadcrumb-item active">Accessories</li>
                    </ol>
                </nav>
                <div class="product_name">Acer Aspire 3 Celeron Dual Core - (2 GB/500 GB HDD/Windows 10 Home) A315-33 Laptop (15.6 inch, Black, 2.1 kg)</div>
                <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                <div> 
                    <span class="product_price">₹<?php echo $data['price']; ?></span> 
                    <strike class="product_discount"> <span style='color:black'>₹<?php echo $data['mrp']?><span> </strike> 
                </div>
                <div> 
                    <span class="product_saved">You Saved:</span> 
                    <span style='color:black'>₹<?php echo $data['discount'] ?><span> 
                </div>
                <hr class="singleline">
                <div> 
                  <span class="product_info">EMI starts at ₹ 2,000. No Cost EMI Available<span><br> 
                  <span class="product_info">Warranty: 6 months warranty<span><br> 
                  <span class="product_info">7 Days easy return policy<span><br> 
                    <span class="product_info">7 Days easy return policy<span><br> 
                    <span class="product_info">In Stock: 25 units sold this week<span> </div>
                <div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="br-dashed">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3">
                                      <img src="assets/img/price-tag.png">
                                    </div>
                                    <div class="col-md-9 col-xs-9">
                                        <div class="pr-info"> 
                                          <span class="break-all">Get 5% instant discount + 10X rewards @ RENTOPC</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7"> </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-xs-6" style="margin-left: 15px;">
                             <span class="product_options">RAM Options</span><br>
                            <button class="btn btn-primary btn-sm">4 GB</button> 
                            <button class="btn btn-primary btn-sm">8 GB</button> 
                            <button class="btn btn-primary btn-sm">16 GB</button>
                         </div>
                        <div class="col-xs-6" style="margin-left: 55px;"> 
                            <span class="product_options">Storage Options</span><br> 
                            <button class="btn btn-primary btn-sm">500 GB</button> 
                            <button class="btn btn-primary btn-sm">1 TB</button> 
                        </div>
                    </div>
                </div>
                <hr class="singleline">
                <div class="order_info d-flex flex-row">
                    <form action="#">
                </div>
                <div class="row">
                    
                    <div class="col-xs-6"> 
        
                        <a href="cart_action.php?u_id=<?php echo  $id;?> &pid=<?php echo $data['p_id']; ?>" style="text-decoration: none;"><button type="button" class="btn btn-primary shop-button">Add to Cart</button> </a>
                        <button type="button" class="btn btn-success shop-button">Buy Now</button>
                        <!--<div class="product_fav"><i class="fas fa-heart"></i></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    } 
}else {
      echo "<tr><td colspan='4' class='text-center'>No Record Found...</td></tr>";
  }
    ?>

    <div class="row row-underline">
        <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
        <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="col-md-12">
                <tbody>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide, Warranty Documents</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Model Number :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li> 14-dh0107TU </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Part Number :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>7AL87PA</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>Black</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Suitable for :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>Processing & Multitasking</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Processor Brand :</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>Intel</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

    



             <!---------------Footer------------>
<?php
    include('footer.php');
    include('footerlink.php');
?>
