
@extends('layouts.app')

@section('title', 'Checkout')


    <style>
        .mt-32 {
            margin-top: 32px;
        }
 

    </style>

    <script src="https://js.stripe.com/v3/"></script>

    

    <h1 class="checkout-heading stylish-heading">Checkout</h1>
    

    <div class="checkout-container">
    <link rel="stylesheet" href="css/checkout.css">


        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        <body style="background-color:#f39c12">
      
        
        <div class="checkout-section">
        <div class="billing-details">
            <div>
                <form action="{{ route ('checkout') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h1>Payment</h1>

                    <div class="half-form">
                    <div class="form-group1">
                        <label for="email">Email Address</label>
                        @if (auth()->user())
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif
                    </div>
                    <div class="form-group1">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                  </div>
                    <div class="form-group1">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="form-group">
    <label for="delivery_date">Delivery Date</label>
    <input class="form-control" type="date" id="delivery_date" name="delivery_date" required>
</div>

                    <!-- <div class="half-form">
                        <div class="form-group1">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group1">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> 

                    <div class="half-form">
                        <div class="form-group1">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div class="form-group1">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>  -->

                    <div class="spacer"></div>







                    
                       <label for="payment_method">Payment Method:</label>

                       <div>
    <label>
        <input type="radio" name="payment_method" value="cash" onclick="hideCreditCardFields()"  required> Cash
    </label><br>
    <label>
        <input type="radio" name="payment_method" value="credit_card" onclick="showCreditCardFields()" required> Credit Card
    </label>
</div>



      <div id="credit_card_fields" style="display: none;">
                    <div class="form-group1">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" required>
                    </div>

                    <div class="form-group">
                    
                    
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element" class="form-control" style="border: 1px solid #ddd; padding: 10px;" data-stripe="card">

                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->

                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>
                    
                    <p id="support">Having problem with checkout? <a href="https://stripe.com/en-my">Contact our support</a>.</p>
                    </div>
                    

                    <div id="cash_on_delivery_content" style="display: none;">
                    </div>

                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
        </div>
      </div>
      


                   

            <div class="checkout-table-container">
            <div class="cart-items">
                <h2 class="yourOrder">Your Order</h2>

                <div class="checkout-table">
                  <table>
                    <thead>
                      <tr>
                        <th></th>
                        <th><label class="checkout_order">Item Name</label></th>
                        <th><label class="checkout_order">Price</label></th>
                        <th><label class="checkout_order">QTY</label></th>
                      </tr>
                     </thead>
                     <tbody>
                     <?php $itemPrice = 0; ?>
                     <?php $totalPrice = 0; ?>

                     <!-- item  -->
                     @foreach ($products as $product)
                      <tr>  
                      <!-- <img src="{{ ($product->image) }}" alt="item" class="checkout-table-img"> -->
                        <td><img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="50" height="50"></td>
                        <td><div class="checkout-table-name">{{$product->name}}</td>
                        <td>  <div class="checkout-table-price">{{$product->price}}</td>
                        <?php $itemPrice = $product->price*1; ?>
                        <?php $totalPrice += $itemPrice; ?>
                        <input type="hidden" name="total_price" value="{{ $totalPrice }}">

                        <td>
                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1 {{ $product->qty }}</div>
                            
                        </div>
                       </td>
                      </tr>
                     
                      @endforeach
                    </tbody>
                  </table>

               

                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                <div class="checkout-totals-right">
                        <span class="checkout-totals-total">Total Price: </span>
   
                        <span class="checkout-totals-price">{{ number_format($totalPrice, 2, '.', ',') }}</span>

                    </div>

                   
                </div> <!-- end checkout-totals -->
            </div>

            </form>

        </div> <!-- end checkout-section -->
    </div>
      
      </body>
      </div>
      

      <script>
function showCreditCardFields() {
    var creditCardFields = document.getElementById('credit_card_fields');
    creditCardFields.style.display = 'block';
}

function hideCreditCardFields() {
    var creditCardFields = document.getElementById('credit_card_fields');
    creditCardFields.style.display = 'none';
}
</script>

<script>
var stripe = Stripe('YOUR_PUBLISHABLE_KEY');
var elements = stripe.elements();
var cardElement = elements.create('card');
cardElement.mount('#card-element');

var form = document.getElementById('payment-form');
var submitButton = document.getElementById('submit');

submitButton.addEventListener('click', function(event) {
  event.preventDefault();
  
  stripe.createToken(cardElement).then(function(result) {
    if (result.error) {
      // Handle card errors
    } else {
      // Send the token to your server
      var token = result.token;
      // Send the token to your server
      // ...
    }
  });
});
</script>


<script>
  var stripe = Stripe('your_publishable_key_here');
  var elements = stripe.elements();

  var style = {
  base: {
    fontSize: '16px',
    color: '#32325d',
    fontFamily: '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif',
    fontSmoothing: 'antialiased',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

var cardElement = elements.create('card', {
  style: style,
  classes: {
    base: 'stripe-input',
    invalid: 'stripe-input-invalid'
  },
  hidePostalCode: true,
  iconStyle: 'solid'
});

cardElement.mount('#card-element');

cardElement.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Set the fields as required
var elements = stripe.elements();
var cardNumberElement = elements.getElement('cardNumber');
var cardExpiryElement = elements.getElement('cardExpiry');
var cardCvcElement = elements.getElement('cardCvc');

cardNumberElement.addEventListener('change', function(event) {
  if (event.empty) {
    event.error = 'Please enter your card number.';
  }
});

cardExpiryElement.addEventListener('change', function(event) {
  if (event.empty) {
    event.error = 'Please enter your card expiration date.';
  }
});

cardCvcElement.addEventListener('change', function(event) {
  if (event.empty) {
    event.error = 'Please enter your card security code (CVC).';
  }
});
</script>




  



