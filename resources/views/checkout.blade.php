@extends('layouts.app')

@section('title', 'Checkout')


<script>
    $(document).ready(function() {
      $('#credit_card').click(function() {
        $('#credit_card_details').show();
      });
      $('#cash_on_delivery').click(function() {
        $('#credit_card_details').hide();
      });
    });
  </script>

    <style>
        .mt-32 {
            margin-top: 32px;
        }
    </style>

    <script src="https://js.stripe.com/v3/"></script>




    <div class="container">
    <link rel="stylesheet" href="/checkout.css">


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


        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        @if (auth()->user())
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>


                    <div class="form-group">
        <label for="payment_method">Payment Method:</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_method" id="credit_card" value="credit_card" required>
          <label class="form-check-label" for="credit_card">
            Credit Card
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="cash_on_delivery" required>
          <label class="form-check-label" for="cash_on_delivery">
            Cash on Delivery
          </label>
        </div>
      </div>



      <div id="credit_card_content" style="display: none;">
                    <div class="form-group">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>

                    <div class="form-group">
                    
                    
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">

                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->

                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>
                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
                    <p id="support">Having problem with checkout? <a href="#">Contact our support</a>.</p>
                    </div>
                    

                    <div id="cash_on_delivery_content" style="display: none;">
                     <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
                    </div>
                   </div>

             <input type="date" name="date" id="date" class="form-control" style="width: 100%; display: inline;" onchange="invoicedue(event);" required value="{{$shipment->date}}">

    

            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                  <table>
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Price</th>
                      </tr>
                     </thead>
                     <tbody>
                     @foreach ($products as $product)
                      <tr>  
                        <td><img src="/image {{$product->image}}" style="width:50px"></td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->price}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">

                        <span class="checkout-totals-total">Total</span>

                    </div>

                   
                </div> <!-- end checkout-totals -->
            </div>

        </div> <!-- end checkout-section -->
    </div>


<script>
    const creditCardContent = document.querySelector('#credit_card_content');
const cashOnDeliveryContent = document.querySelector('#cash_on_delivery_content');

// Hide Cash on Delivery content by default
cashOnDeliveryContent.style.display = 'none';

// Listen for changes to payment method selection
const paymentMethodInputs = document.querySelectorAll('input[name="payment_method"]');
paymentMethodInputs.forEach(input => {
  input.addEventListener('change', (event) => {
    if (event.target.value === 'credit_card') {
      creditCardContent.style.display = 'block';
      cashOnDeliveryContent.style.display = 'none';
    } else if (event.target.value === 'cash_on_delivery') {
      cashOnDeliveryContent.style.display = 'block';
      creditCardContent.style.display = 'none';
    }
  });
});
 
</script>


    <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>

    <script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('pk_test_iO0OmHJjHiksR0HjyoUOSMNS0017Q3B9xA');
            // Create an instance of Elements
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };
            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
            // Handle form submission
            // var form = document.getElementById('payment-form');
            // form.addEventListener('submit', function(event) {
            //   event.preventDefault();
            //   // Disable the submit button to prevent repeated clicks
            //   document.getElementById('complete-order').disabled = true;
            //   var options = {
            //     name: document.getElementById('name_on_card').value,
            //     address_line1: document.getElementById('address').value,
            //     address_city: document.getElementById('city').value,
            //     address_state: document.getElementById('province').value,
            //     address_zip: document.getElementById('postalcode').value
            //   }
            //   stripe.createToken(card, options).then(function(result) {
            //     if (result.error) {
            //       // Inform the user if there was an error
            //       var errorElement = document.getElementById('card-errors');
            //       errorElement.textContent = result.error.message;
            //       // Enable the submit button
            //       document.getElementById('complete-order').disabled = false;
            //     } else {
            //       // Send the token to your server
            //       stripeTokenHandler(result.token);
            //     }
            //   });
            // });
            // function stripeTokenHandler(token) {
            //   // Insert the token ID into the form so it gets submitted to the server
            //   var form = document.getElementById('payment-form');
            //   var hiddenInput = document.createElement('input');
            //   hiddenInput.setAttribute('type', 'hidden');
            //   hiddenInput.setAttribute('name', 'stripeToken');
            //   hiddenInput.setAttribute('value', token.id);
            //   form.appendChild(hiddenInput);
            //   // Submit the form
            //   form.submit();
            // }
            // PayPal Stuff
            var form = document.querySelector('#paypal-payment-form');
            
            braintree.dropin.create({
              authorization: client_token,
              selector: '#bt-dropin',
              paypal: {
                flow: 'vault'
              }
            }, function (createErr, instance) {
              if (createErr) {
                console.log('Create Error', createErr);
                return;
              }
              // remove credit card option
              var elem = document.querySelector('.braintree-option__card');
              elem.parentNode.removeChild(elem);
              form.addEventListener('submit', function (event) {
                event.preventDefault();
                instance.requestPaymentMethod(function (err, payload) {
                  if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                  }
                  // Add the nonce to the form and submit
                  document.querySelector('#nonce').value = payload.nonce;
                  form.submit();
                });
              });
            });
        })();
    </script>
