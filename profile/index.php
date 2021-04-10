<?php include ("../bootstrap.php");?>

<!-- head -->
<?php include(ROOT_PATH."/profile/inc/head.php");?>

<!-- header -->
<?php include(ROOT_PATH."/profile/inc/header.php");?>

    <div class="content d-flex">
      
    <!-- sidebar -->
<?php include(ROOT_PATH."/profile/inc/sidebar.php");?>

        <main class="content-center ">
              <!-- Search-box -->
        <?php include(ROOT_PATH."/profile/inc/search-box.php");?>



                <!-- Price For Advertising  -->
                 
                <div class="heading-tertiary d-none">Select The Type of the Ad</div>
                <div class="prices d-flex d-none">

                    <div class="price_card">
                        <div class="price_card__title price_card__title--free">
                            <i class="fa fa-paper-plane price_card--plane"></i>
                            <h2>Free Ad</h2>
                        </div>
                        <div class="price_card__price price_card__price--free">
                            <h4>$<span>0</span></h4>
                        </div>
                        <div class="price_card__option">
                            <ul>
                                <li><i class="fa fa-check price_li"></i>Post Free Ad</li>
                                <li><i class="fa fa-check price_li"></i>Not guaranteed first postion</li>
                                <li><i class="fa fa-check price_li"></i>You will be listed free in the free section</li>
                                <li><i class="fa fa-check price_li"></i>Best option for begginers</li>
                            </ul>
                        </div>
                        <a href="#">Free Ad</a>
                    </div>

                  
                    <div class="price_card">
                        <div class="price_card__title price_card__title--standard">
                            <i class="fa fa-rocket price_card--space-shuttle"></i>
                            <h2>Standard Ad</h2>
                        </div>
                        <div class="price_card__price price_card__price--standard">
                            <h4>$<span>50</span></h4>
                        </div>
                        <div class="price_card__option">
                            <ul>
                                <li><i class="fa fa-check price_li"></i>50c Per Day</li>
                                <li><i class="fa fa-check price_li"></i>First place until someone place a new paid add for the same location</li>
                                <li><i class="fa fa-check price_li"></i>Be seen in front of other free posts</li>
                                <li><i class="fa fa-check price_li"></i>You can go to premium any time</li>
                            </ul>
                        </div>
                        <a href="#">Standard Ad</a>
                    </div>

                    <div class="price_card">
                        <div class="price_card__title price_card__title--premium">
                            <i class="fa fa-fire price_card--fire"></i>
                            <h2>Premium Ad</h2>
                        </div>
                        <div class="price_card__price price_card__price--premium">
                            <h4>+ $<span>50</span></h4>
                        </div>
                        <div class="price_card__option">
                            <ul>
                                <li><i class="fa fa-check price_li"></i>Beat others with 50c more</li>
                                <li><i class="fa fa-check price_li"></i>First place</li>
                                <li><i class="fa fa-check price_li"></i>Select how many days</li>
                                <li><i class="fa fa-check price_li"></i>Best deal ever</li>
                            </ul>
                        </div>
                        <a href="#">Premium Ad</a>

                    </div>
                </div> 

                <!--Section for displaying all of our posts-->
             
         <div class="heading-tertiary d-none">Our Active Posts/Ads</div> 
                <section class="section-posts d-none">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="post text-center">
                                <div class="post__total-images">5</div>
                                <h2 class="post-heading">Part Time Adminstration Assistant 15 hours per week </h2>

                                <div id="carouselExampleControls-156" class="carousel slide post__img" data-ride="carousel">
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/ialicante-mediterranean-homes-475777-unsplash.jpg" alt="cristian-lozan">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="img/stephan-bechert.jpg" alt="cristian-lozan">
                                          </div>

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls-156" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls-156" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                </div><!--end of carousel-->

                                <div class="post__price">
                                    <h1 class="post__price-margin">Mackay Club</h1>
                                </div>
                                <div class="post-description">
                                    <p class="post-description__content">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing
                                         elit. Debitis
                                         officiis atque quidem quaerat possimus saepe 
                                         eum consectetur, cupiditate perspiciatis!
                                         Voluptates animi quos rerum debitis autem dolore
                                          non reiciendis voluptate quaerat!
                                    </p>
                                </div>
                                <div class="post-icons">

                                </div>
                                <div class="post-link">
                                    <a href="#" class="post-link__edit">Edit <i class="fa fa-edit"></i></a>
                                    <a href="#" class="post-link__del">Delete <i class="fa fa-trash"></i></a>
                                </div>

                                <div class="post-details">
                                       <div class="post-details__date-posted">
                                           <span><i class=" fa fa-calendar  post-details__date-icon"></i>2020-04-08</span>
                                       </div>
                                       <div class="post-details__location">
                                        <span><i class="fa fa-map  post-details__map-icon"></i>Brighton , Vic 3186</span>   
                                      </div>
                                      <div class="post-details__paid-status">
                                        <span><i class="fa fa-dollar  post-details__price-icon"></i> 0 - Unpaid</span>   
                                     </div>
                               </div>
                            </div>
                        </div><!--end of the ad-->

                        <!--start of the second of our posts/ads-->
                        <div class="col-md-4 col-sm-6">
                                <div class="post text-center">
                                    <div class="post__total-images">3</div>
                                    <h2 class="post-heading">17 Dover Court Brighton , Vic 3186</h2>
    
                                    <div id="carouselExampleControls" class="carousel slide post__img" data-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                <img class="d-block w-100" src="img/ialicante-mediterranean-homes-475777-unsplash.jpg" alt="cristian-lozan">
                                              </div>
                                              <div class="carousel-item">
                                                <img class="d-block w-100" src="img/stephan-bechert.jpg" alt="cristian-lozan">
                                              </div>
    
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                    </div><!--end of carousel-->
    
                                    <div class="post__price">
                                        <h1 class="post__price-margin"><sup>$</sup>650,000</h1>
                                    </div>
                                    <div class="post-description">
                                        <p class="post-description__content">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing
                                             elit. Debitis
                                             officiis atque quidem quaerat possimus saepe 
                                             eum consectetur, cupiditate perspiciatis!
                                             Voluptates animi quos rerum debitis autem dolore
                                              non reiciendis voluptate quaerat!
                                        </p>
                                    </div>
                                    

                                        <div class="post-icons d-flex">
                                    
                                            <p class="post-icons__styles"> <span>House</span><i class="fa fa-home"></i></p>
                                            <p class="post-icons__styles"> <span>3</span><i class="fa fa-bed"></i></p>
                                            <p class="post-icons__styles"> <span>2</span><i class="fa fa-shower"></i></p>
                                            <p class="post-icons__styles"> <span>1 P</span></p>
                                        </div>
                                
              

                                        <div class="post-link">
                                                <a href="#" class="post-link__edit">Edit <i class="fa fa-edit"></i></a>
                                                <a href="#" class="post-link__del">Delete <i class="fa fa-trash"></i></a>
                                            </div>
    
                                    <div class="post-details">
                                           <div class="post-details__date-posted">
                                               <span><i class=" fa fa-calendar post-details__date-icon"></i>2020-04-08</span>
                                           </div>
                                           <div class="post-details__location">
                                            <span><i class="fa fa-map  post-details__map-icon"></i>Brighton , Vic 3186</span>   
                                          </div>
                                          <div class="post-details__paid-status">
                                            <span><i class="fa fa-dollar  post-details__price-icon"></i> 0 - Unpaid</span>   
                                         </div>
                                   </div>
                                </div>
                            </div><!--end of the ad-->
                    </div><!--end of the row-->
                </section><!--section all posts ends-->

                <!-- <div class="heading-tertiary">Our custom made modal</div> -->
     <section class="popup-section start d-none" id="modal_popup">
            <div class="popup">
                <div class="popup-content">
                    <div class="popup-header">
                        <h3 class="popup-header__title heading-modal ">Add Photo</h3>
                        <a class="close popup-header__close" href="">&times;</a>
                    </div>
                    <div class="popup-body">
                        <form action="add-photo.html" method="POST" enctype="multipart/form-data">

                            <div class="from-group">
                                <input type="file" name="file" id="file" class="form-control input-style" required>
                            </div>
                                <div class="popup-submit">
                                    <input type="submit" name="picture" class="btn btn-success popup-submit__btn-modal" value="Submit">
                                </div>
                        </form>
                        
                    </div>
                </div>
            </div>
    </section> 

    <!--Profile Form goes here-->

    <section class="content-form d-none d-flex justify-content-center align-items-center flex-wrap">
        <div class="heading-tertiary">Add Post</div>
        <form method="POST" id="multiplesub" name="multiplesub" class="profile-form" action="" 
        enctype="multipart/form-data">

        <div>
            <label class="subtitle-style ">Every freer post/ad can be maximum posted for 30 days</label>
        </div>

        <div class="profile-form__styling">
            <label for="post_title" class="label-style">Ad Title</label>
            <input type="text" name="post_title" class="input-style" placeholder="Enter your title" autocomplete="off" required>
        </div>
 
        <div class="profile-form__styling">
                <label for="post_price_type" class="label-style">Select Price</label>
                <select  id="post_price_type" name="post_price_type" class="form-control select-style" >
                    <option value="free" selected>Free</option>
                    <option value="standard" >Standard</option>
                    <option value="premium" >Premium</option>
                </select>
        </div>

        <div class="profile-form__styling">
                <label for="startDate" class="label-style">Start Date</label>
                <input type="date" max="3000-12-30" name="post_title" autocomplete="off" 
                class="input-style" required>
        </div>


        <div class="d-flex justify-content-around flex-wrap">
            <div class="profile-form__left-select">
                    <label for="ad_category" class="label-style">Select Category</label>
                    <select  id="ad_category" name="ad_category" class="form-control select-style" required>
                        <option value="1" selected>Realestate</option>
                        <option value="2" >Jobs</option>
                        <option value="3" >Antiques</option>
                    </select>
            </div>

            <div class="profile-form__right-select">
                    <label for="ad_subcategory" class="label-style">Select Subcategory</label>
                    <select  id="ad_subcategory" name="ad_subcategory" class="form-control select-style" required>
                        <option value="1" selected>House</option>
                        <option value="2" >Vila</option>
                        <option value="3" >Unit</option>
                        <option value="4" >Townhouse</option>
                        <option value="5" >Appartment</option>
                    </select>
            </div>

        </div>


        <div class="profile-form__styling">
                <label for="specific_item" class="label-style">Ad Your Images</label>
                <input type="file" name="file[]" class="form-control input-style"
                  multiple>
        </div>

    
        <div class="d-flex justify-content-around align-items-end profile-form__item-price ">

            <div class="">
                    <label for="post_price" class="label-style">Price</label>
                    <input type="text" id="post_price" name="post_price" class="input-style" placeholder="ex. $100" autocomplete="off" readonly>
            </div>

            <div class="profile-form__item-price-radio">
                <div class="profile-form__radio-group">
                    <input type="radio"  class="profile-form__radio-input" id="amount" value="amount" name="radio_price">
                        <label for="amount" class="profile-form__radio-label">
                            <span class="profile-form__radio-button"></span>Amount
                        </label>
                </div>
                <div class="profile-form__radio-group">
                        <input type="radio"  class="profile-form__radio-input" id="negotiable" value="negotiable" name="radio_price">
                            <label for="negotiable" class="profile-form__radio-label">
                                <span class="profile-form__radio-button"></span>Negotiable
                            </label>
                </div>
                <div class="profile-form__radio-group">
                        <input type="radio"  class="profile-form__radio-input" id="swap_trade" value="swap_trade" name="radio_price">
                            <label for="swap_trade" class="profile-form__radio-label">
                                <span class="profile-form__radio-button"></span>Swap/Trade
                            </label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between flex-wrap">

            <div class="">
                <label for="company_email" class="label-style">Your Email</label>
                <input type="email" name="company_email" id="company_email" class="input-style" placeholder="Enter your email" autocomplete="off" required>
            </div>
            <div class="">
                <label for="name" class="label-style">Your Company/Name</label>
                <input type="text" name="name" id="name" class="input-style" placeholder="Enter your Name" autocomplete="off" required>
            </div>
            <div class="">
                <label for="number" class="label-style">Your Number</label>
                <input type="text" name="number" id="number" class="input-style" placeholder="Enter your Number/mobile" autocomplete="off" required>
            </div>
        </div>

        <div class="">
                <label for="summernote" class="label-style">Your content</label>
                <div id="summernote"></div>
        </div>

        <div class="">
                <div class="">
                        <label for="condition" class="label-style">Condtion</label>
                </div>
                <div class="profile-form__radio-group">
                        <input type="radio"  class="profile-form__radio-input" id="new" value="new" name="condition">
                            <label for="new" class="profile-form__radio-label">
                                <span class="profile-form__radio-button"></span>New
                            </label>
                </div>
                <div class="profile-form__radio-group">
                        <input type="radio"  class="profile-form__radio-input" id="used" value="used" name="condition">
                            <label for="used" class="profile-form__radio-label">
                                <span class="profile-form__radio-button"></span>Used
                            </label>
                </div>
        </div>
        
        <div class="text-center">
            <button type="submit" id="submit_post" class="btn btn-success form-btn">Publish</button>
        </div>
        </form>
    </section> 

    <!-- Section Cart-->
    <section class="cart-section d-none">
        <div class="col-md-12">
            <div class="heading-tertiary">Your Unpaid Posts</div>
        </div>
        <p class="text-left shopping_bag_heading">Items in Your Cart</p>
        <div class="cart-wrapper ">
            <div class="shopping_cart d-flex">
                <div class="shopping_bag d-flex">
                        <img src="img/stephan-bechert.jpg" class="shopping_bag-img" alt="stephan-bechert">
                        <div class="shopping_bag-description d-flex flex-column">
                            <p class="title">House For Sale in Victoria/ Melbourne</p>
                            <p class="red">Realestate</p>
                            <p class="price">$550,600</p>
                        </div>
                        <div class="shopping_bag-remove d-flex flex-column">
                            <p class="quantity"><span class="quantity-col">1 Item</span></p>
                            <a href="cart.php?action=delete" class="remove">Remove</a>
                        </div>
        
                        <div class="shopping_bag-outside">
                            <p class="price-outside"><sup>$</sup>0</p>
                        </div>
                </div><!--shopping bag ends-->
      
            </div><!--shopping cart ends-->

            <div class="checkout_box">
                <div class="checkout_box__order-summary text-center">
                    <p class="order">Order Summary</p>
                </div>

                <div class="checkout_box__total-price text-center">
                        <p class="subtotal">Subtotal:</p>
                        <p class="subtotal_price"><sup>$</sup>0.00</p>
                </div>

                <div class="checkout_box__checkout">
                        <a href="#payment" class="btn checkout_box__button text-center"><i class="fa fa-lock"></i>Checkout</a>
                </div>

                <div class="checkout_box-payment-icons d-flex ">
                        <svg class="checkout__icon">
                                <use xlink:href="img/SVG/symbol-defs.svg#icon-visa"></use>
                        </svg>
                        <svg class="checkout__icon">
                            <use xlink:href="img/SVG/symbol-defs.svg#icon-cc-paypal"></use>
                        </svg>
                    
                        <svg class="checkout__icon">
                                <use xlink:href="img/SVG/symbol-defs.svg#icon-americanexpress"></use>
                            </svg>
                            
                            <svg class="checkout__icon">
                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-cc-stripe"></use>
                            </svg>
                            <svg class="checkout__icon">
                                    <use xlink:href="img/SVG/symbol-defs.svg#icon-mastercard"></use>
                            </svg>
                </div><!--end of payment icons-->

            </div><!--checkout box ends-->


   
        </div><!--shopping cart wrapper-->

        <div class="col-md-12" id="payment">

                <h1 class="heading-tertiary">Payment Section</h1>
            </div>

            <article class="card col-md-12 ">

                <div class="card-body p-5">
                    <ul class="nav bg-light nav-pills rounded nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                <i class="fa fa-credit-card"></i> Credit Card
                            </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                    <i class="fa fa-paypal"></i> Paypal
                                </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                    <i class="fa fa-university"></i> Bank Transfer
                                </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-tab-card">
                           
                                    <form action="" method="POST" class="margin-lg-t" id="payment-form">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                                         <label for="card-element" class="">
                                             Credit or debit card
                                         </label>
                                         <input type="text" class="form-control" id="card-element" placeholder="Your Card Number">
                                         <button class="btn btn-primary btn-block mt-4 p-4">Submit Payment</button>
                                    </form>
                                        
<!--fomr stripe done-->
                        </div><!--tab pane done-->
                        <div class="tab-pane fade " id="nav-tab-paypal">
                            <form class="paypal" action="" method="POST" id="paypal_form">
                                <button class="btn btn-primary " type="submit"><i class="fa fa-paypal"></i>Paypal</button>
                            </form>
                            <p><strong>Paypal Payment here styled</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, quasi ad libero laudantium quibusdam recusandae, asperiores eligendi numquam adipisci dolores, illo deserunt maiores? Vero dolores sed fugiat, dignissimos quae nulla!</p>
<!--paypal form done-->
                        </div>
                        <!--paypal tab done-->

                        <div class="tab-pane fade" id="nav-tab-bank">
                            <p>Bank Account Details</p>
                            <p>Name Of Bank: ANZ</p>
                            <p>Account Number :145232655</p>
                            <p>BSB Number :163465</p>
                            <p>IBAN Number :1268465225855</p>
                            <p><strong>Bank Payment details here</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, quasi ad libero laudantium quibusdam recusandae, asperiores eligendi numquam adipisci dolores, illo deserunt maiores? Vero dolores sed fugiat, dignissimos quae nulla!</p>
                    </div>
                </div>
            </article>
    </section>

    <!-- Live Search-->
    <section class="live-search d-none">
        <h3 class="heading-tertiary"> Searched Results</h3>
    <div class="row">
        <div class="col-md-12 mar-bt5" id="section-livesearch">
            <div class="searched-box d-flex align-items-center">
            <div class="search-profile-box">
                <div class="img-box">
                    <img src="img/cristian-lozan-371397-unsplash.jpg" alt="cristian-lozan" class="s-profile-img">
                </div>
            </div>
            <div class="profile-details-box d-flex flex-wrap">
                    <div class="profile-details-box__name d-flex flex-column align-items-center">
                        <i class="fa fa-user-circle"></i>
                        <span class="heading-style">Erick Andrews</span>
                    </div>
                    <div class="profile-details-box__occupation d-flex flex-column align-items-center">
                            <i class="fa fa-briefcase"></i>
                            <span class="heading-style">Web/ Software Developer</span>
                    </div>
                    <div class="profile-details-box__location d-flex flex-column align-items-center">
                            <i class="fa fa-map"></i>
                            <span class="heading-style">Melbourne</span>
                    </div>
                    <div class="profile-details-box__experience d-flex flex-column align-items-center">
                            <i class="fa fa-flask"></i>
                            <span class="heading-style">7 Years</span>
                    </div>
      
                    <div class="profile-details-box__reviews d-flex flex-column align-items-center">
                            <i class="fa fa-star"></i>
                            <span class="heading-style"><span class="rating">4.5</span>Reviews</span>
                    </div>

                    <div class="profile-details-box__viewme">
                           
                            <a href="#" class="">View Me</a>
                    </div>
            </div>
            </div><!--search box ends-->
        </div><!-- end of col-md-12-->  
        <div class="col-md-12 mar-bt5" id="section-livesearch">
            <div class="searched-box d-flex align-items-center">
            <div class="search-profile-box">
                <div class="img-box">
                    <img src="img/cristian-lozan-371397-unsplash.jpg" alt="cristian-lozan" class="s-profile-img">
                </div>
            </div>
            <div class="profile-details-box d-flex flex-wrap">
                    <div class="profile-details-box__name d-flex flex-column align-items-center">
                        <i class="fa fa-user-circle"></i>
                        <span class="heading-style">Erick Andrews</span>
                    </div>
                    <div class="profile-details-box__occupation d-flex flex-column align-items-center">
                            <i class="fa fa-briefcase"></i>
                            <span class="heading-style">Web/ Software Developer</span>
                    </div>
                    <div class="profile-details-box__location d-flex flex-column align-items-center">
                            <i class="fa fa-map"></i>
                            <span class="heading-style">Melbourne</span>
                    </div>
                    <div class="profile-details-box__experience d-flex flex-column align-items-center">
                            <i class="fa fa-flask"></i>
                            <span class="heading-style">7 Years</span>
                    </div>
      
                    <div class="profile-details-box__reviews d-flex flex-column align-items-center">
                            <i class="fa fa-star"></i>
                            <span class="heading-style"><span class="rating">4.5</span>Reviews</span>
                    </div>

                    <div class="profile-details-box__viewme">
                           
                            <a href="#" class="">View Me</a>
                    </div>
            </div>
            </div><!--search box ends-->
        </div><!-- end of col-md-12-->  

    </div><!-- end of row-->  
    
    </section>

    <section class="display-msgheader-danger d-none">
        <p> <i class="fa fa-check"></i> Success!!</p>
    </section>

    <!--Section for adding the posts to cart-->
    <div class="heading-tertiary ">Our Unpaid Posts/Ads</div> 
    <section class="section-posts ">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="post text-center">
                    <div class="post__total-images">5</div>
                    <h2 class="post-heading">Part Time Adminstration Assistant 15 hours per week </h2>

                    <div id="carouselExampleControls-156" class="carousel slide post__img" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/ialicante-mediterranean-homes-475777-unsplash.jpg" alt="cristian-lozan">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/stephan-bechert.jpg" alt="cristian-lozan">
                              </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls-156" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls-156" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                    </div><!--end of carousel-->

                    <div class="post__price">
                        <h1 class="post__price-margin">Mackay Club</h1>
                    </div>
                    <div class="post-description">
                        <p class="post-description__content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                             elit. Debitis
                             officiis atque quidem quaerat possimus saepe 
                             eum consectetur, cupiditate perspiciatis!
                             Voluptates animi quos rerum debitis autem dolore
                              non reiciendis voluptate quaerat!
                        </p>
                    </div>
                    <div class="post-icons">

                    </div>
                    <div class="post-link">
                        <a href="#" class="post-link__add-to-cart">Add To Cart <i class="fa fa-shopping-cart"></i></a>
                        <a href="#" class="post-link__checkout">Checkout <i class="fa fa-shopping-bag"></i></a>
                    </div>

                    <div class="post-details">
                           <div class="post-details__date-posted">
                               <span><i class=" fa fa-calendar  post-details__date-icon"></i>2020-04-08</span>
                           </div>
                           <div class="post-details__location">
                            <span><i class="fa fa-map  post-details__map-icon"></i>Brighton , Vic 3186</span>   
                          </div>
                          <div class="post-details__paid-status">
                            <span><i class="fa fa-dollar  post-details__price-icon"></i> 0 - Unpaid</span>   
                         </div>
                   </div>
                </div>
            </div><!--end of the ad-->

            <!--start of the second of our posts/ads-->
            <div class="col-md-4 col-sm-6">
                    <div class="post text-center">
                        <div class="post__total-images">3</div>
                        <h2 class="post-heading">17 Dover Court Brighton , Vic 3186</h2>

                        <div id="carouselExampleControls" class="carousel slide post__img" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/ialicante-mediterranean-homes-475777-unsplash.jpg" alt="cristian-lozan">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/stephan-bechert.jpg" alt="cristian-lozan">
                                  </div>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                        </div><!--end of carousel-->

                        <div class="post__price">
                            <h1 class="post__price-margin"><sup>$</sup>650,000</h1>
                        </div>
                        <div class="post-description">
                            <p class="post-description__content">
                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                 elit. Debitis
                                 officiis atque quidem quaerat possimus saepe 
                                 eum consectetur, cupiditate perspiciatis!
                                 Voluptates animi quos rerum debitis autem dolore
                                  non reiciendis voluptate quaerat!
                            </p>
                        </div>
                        

                            <div class="post-icons d-flex">
                        
                                <p class="post-icons__styles"> <span>House</span><i class="fa fa-home"></i></p>
                                <p class="post-icons__styles"> <span>3</span><i class="fa fa-bed"></i></p>
                                <p class="post-icons__styles"> <span>2</span><i class="fa fa-shower"></i></p>
                                <p class="post-icons__styles"> <span>1 P</span></p>
                            </div>
                    
  

                            <div class="post-link">
                                    <a href="#" class="post-link__add-to-cart">Add To Cart <i class="fa fa-shopping-cart"></i></a>
                                    <a href="#" class="post-link__checkout">Checkout <i class="fa fa-shopping-bag"></i></a>
                                </div>
                        <div class="post-details">
                               <div class="post-details__date-posted">
                                   <span><i class=" fa fa-calendar post-details__date-icon"></i>2020-04-08</span>
                               </div>
                               <div class="post-details__location">
                                <span><i class="fa fa-map  post-details__map-icon"></i>Brighton , Vic 3186</span>   
                              </div>
                              <div class="post-details__paid-status">
                                <span><i class="fa fa-dollar  post-details__price-icon"></i> 0 - Unpaid</span>   
                             </div>
                       </div>
                    </div>
                </div><!--end of the ad-->
        </div><!--end of the row-->
    </section><!--section all posts ends-->

    
        </main>
    </div>
    <footer class="footer">
        <div class="footer__logob">
            <img src="img/logo.png" alt="the redapp footer logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="footer__navigation">
                <ul class="footer__elements">
                    <li class="footer__items">
                        <a href="#" class="footer__items__shine">About</a>
                    </li>
                    <li class="footer__items">
                            <a href="#" class="footer__items__shine">Contact Us</a>
                    </li>
                    <li class="footer__items">
                            <a href="#" class="footer__items__shine">Our Policy</a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer__copyright">
                    <a href="#" class="footer__items__shine">Built by RedApp</a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    
                    
                </div>
            </div>
        </div>
    </footer>
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="vendors/js/bootstrap.min.js"></script>  
<script>
        $('#summernote').summernote({
          placeholder: 'Content goes here',
       
        });
</script>

</body>
</html>
