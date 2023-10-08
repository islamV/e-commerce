<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT</title>
    <link rel="stylesheet" href="{{asset('assets/libs/css/checkout.css')}}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="{{asset('assets/libs/js/contries.js')}}"></script>

</head>

<body>


    <div class="nav_bar">
        <h3>Checkout (1 item)</h3>
    </div>


    <div class="contaner">
        <div class="add_details">

            <div class="box address">
                <span id="box_1" class="title_box">1 Choose a shipping address</span>

                <div id="box_address" class="box_address">
                    <div class="title_address"><span>Your addresses</span></div>
                    <div class="radio_address">
                        <div class="box_radio">
                            <input type="radio" id="address" name="1">
                            <label for="address">Mahmoud Abd Elkarim صول, محطه صول, Atfih, Giza, Egypt</label>
                        </div>
                        <span id="add_adress" class="add_adress">+ Add a new address</span>
                    </div>
                    <div class="buttom">
                        <button type="submit">Use this address</button>
                    </div>
                </div>

                <div id="add_detials_address" class="add_detials_address">
                    <form id="address-form" action="" method="get" autocomplete="off">
                        <div class="head">
                            <span>Enter a new shipping address</span>
                            <span id="exit">Exit</span>
                        </div>
                        <div class="contact_details">
                            <span class="title">Add a new address</span>
                            <div class="box_input">
                                <span class="form-label">Deliver to*</span>
                                <input
                                  id="ship-address"
                                  name="ship-address"
                                  required
                                  autocomplete="off"
                                />
                              </label>
                            
                            </div>
                            <div class="box_input">
                                <span>Full name (First and Last name)</span>
                                <input type="text" name="name" required>
                            </div>
                            <div class="box_input">
                                <span>Phone number</span>
                                <input type="number" name="number" required>
                            </div>
                            <div class="box_input">
                                <span>Address</span>
                                <input type="text" name="address" required placeholder="Street address or P.O. Box">
                                <input type="text" name="address" required
                                    placeholder="Apt, suite, unit, building, floor, etc.">
                            </div>
                            <div class="bo_ad">
                                <div>
                                    <span>City</span>
                                    <input type="text" name="city" required>
                                </div>
                                <div>
                                    <span>State</span>
                                    <select>
                                        <option value="1">Maine </option>
                                        <option value="1">Marshall Islands</option>
                                        <option value="1">Minnesota</option>
                                    </select>
                                </div>
                                <div>
                                    <span>ZIP Code</span>
                                    <input type="number" name="number" required>
                                </div>
                            </div>
                            <button type="submit">Use this address</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="box payment">
                <span id="box_2" class="title_box">2 Payment method </span>

                <div id="box_payment" class="box_payment">
                    <div class="title_payment"><span>Your credit and debit cards</span></div>
                    <div class="radio_payment">
                        <div class="box_radio">
                            <input type="radio" id="payment" name="1">
                            <label for="payment">

                                <div>
                                    <img src="https://m.media-amazon.com/images/I/41MGiaNMk5L._SL40_.png" alt="">
                                    <div>
                                        <span>Visaending in 5024</span>
                                        <span>My card is in Egyptian Pound (EGP)</span>
                                    </div>
                                </div>

                                <div>
                                    <span>Mahmoud</span>
                                    <span>09/2027</span>
                                </div>

                            </label>
                        </div>
                        
                        <span id="add_payment" class="add_payment">+ Add a new payment</span>
                    </div>
                    <div class="buttom">
                        <button type="submit">Use this payment method</button>
                    </div>
                </div>

                <div class="add_detials_payment" id="add_detials_payment">
                    <form action="">
                        <div class="head">
                            <span>Add a credit or debit card</span>
                            <span id="exit_2">Exit</span>
                        </div>

                        <div class="contact_details">

                            <div>
                                <span>Card number</span>
                                <input maxlength="19" onkeypress="cardspace" type="number" required>
                            </div>

                            <div>
                                <span>Name on card</span>
                                <input type="text" required>
                            </div>

                            <div>
                                <span>Expiration date</span>
                                <select name="" id="">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                </select>
                                <select name="" id="">
                                    <option value="1">2024</option>
                                    <option value="2">2023</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <div class="box_inner">
            <div class="head">
                <button>Use this address</button>
                <p>Continue to step 3 to finish checking out. <br>
                    You'll have a chance to review and edit your <br>
                    order before it's final.</p>
            </div>
            <div class="buttom">
                <span class="title">Order Summary</span>
                <div class="mony_order">
                    <div>
                        <span>Items:</span>
                        <span>EGP 11,964.15</span>
                    </div>
                    <div>
                        <span>Shipping & handling:</span>
                        <span>EGP 1,509.13</span>
                    </div>
                    <div>
                        <span>Total before tax:</span>
                        <span>EGP 13,473.27</span>
                    </div>
                    <div>
                        <span>Estimated tax to be collected:</span>
                        <span>EGP 0.00</span>
                    </div>
                </div>
                <div class="total">
                    <span>Payment Total:</span>
                    <span>USD 560.51</span>
                </div>
            </div>
        </div>

    </div>









    <script src="{{asset('assets/libs/js/checkout.js')}}"></script>
  
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly"
    defer
  ></script>
</body>

</html>