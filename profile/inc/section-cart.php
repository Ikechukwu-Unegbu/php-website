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
