   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>FrontEnd Store</title>
       <link rel="stylesheet" href="css/normalize.css">
       <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   </head>

   <body>

       <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top shadow">
           <div class="container">
               <a class="navbar-brand" href="index.html">
                   <img src="img/logo.png" height="50px" width="50px" alt="">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                   aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="index.html">Store</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="nosotros.html">About</a>
                       </li>

                   </ul>
               </div>
           </div>
       </nav>
       <div class="py-5">
           <div class="container">
               <div class="card">
                   <div class="card-body shadow">
                       <form action="placeorder.php" method="POST">
                           <div class="row cart-page-res">
                               <div class="col-md-7 basic-details">
                                   <h5>Basic Details</h5>
                                   <hr>
                                   <div class="row">
                                       <div class="col-md-6 mb-3">
                                           <label class="fw-bold">Name</label>
                                           <input type="text" name="name" id="name" required
                                               placeholder="Enter Your full name" class="form-control">
                                           <small class="text-danger name"></small>
                                       </div>

                                       <div class="col-md-6 mb-3">
                                           <label class="fw-bold">E-mail</label>
                                           <input type="email" name="email" id="email" required
                                               placeholder="Enter Your email" class="form-control">
                                           <small class="text-danger email"></small>
                                       </div>
                                       <div class="col-md-6 mb-3">
                                           <label class="fw-bold">Phone</label>
                                           <input type="text" id="phone" name="phone" required
                                               placeholder="Enter Your phone number" class="form-control">
                                           <small class="text-danger phone"></small>
                                       </div>

                                       <div class="col-md-6 mb-3">
                                           <label class="fw-bold">Zip Code</label>
                                           <input type="text" id="zipcode" name="zipcode" required
                                               placeholder="Enter Your zip code" class="form-control">
                                           <small class="text-danger zipcode"></small>

                                       </div>
                                       <div class="col-md-12 mb-3">
                                           <label class="fw-bold">Address</label>
                                           <textarea name="address" id="address" required class="form-control"
                                               rows="5"></textarea>
                                           <small class="text-danger address"></small>

                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-5 order-details">
                                   <h5>Order Details</h5>
                                   <hr>
                                   <div class="mb-1 my-2 ">
                                       <div class="row align-items-center px-2">
                                           <div class="col-md-6">
                                               <div>
                                                   Product Quantity :
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="input-group">
                                                   <input onchange="Total()" type="number" name="inp_qty" min="1"
                                                       value="1" placeholder="Quantity" class="form-control"
                                                       id="inp_qty">
                                               </div>
                                           </div>

                                       </div>
                                   </div>

                                   <hr>
                                   <h5>
                                       <input type="hidden" name="real_price" id="real_price">
                                       Total Price :$ <span class="fw-bold" id="total_price"> 25</span>
                                   </h5>
                                   <div class="">

                                       <div id="paypal-button-container"></div>
                                   </div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>

       <footer class="p-3 mt-4 bg-dark">
           <h5 class="text-center text-white"> &copy; All Rights Reserved. Created and Published by Luis Andres Medina
           </h5>
       </footer>

       <!-- Replace "test" with your own sandbox Business account app client ID -->
       <script
           src="https://www.paypal.com/sdk/js?client-id=AXu3itulJLGPDXYNVN9RPvzbyWlxQkVtQVdcFcHWzk8L7oSI1LS2oCA_dPM6uWLMazjgH_gLFkmyXxMp&currency=USD">
       </script>


       <script>
       paypal.Buttons({

           onClick() {
               var name = $('#name').val();
               var email = $('#email').val();
               var phone = $('#phone').val();
               var zipcode = $('#zipcode').val();
               var address = $('#address').val();


               if (name.length == 0) {
                   $('.name').text('*This Field is Required');

               } else {
                   $('.name').text('');

               }
               if (email.length == 0) {
                   $('.email').text('*This Field is Required');

               } else {
                   $('.email').text('');

               }
               if (phone.length == 0) {
                   $('.phone').text('*This Field is Required');

               } else {
                   $('.phone').text('');

               }
               if (zipcode.length == 0) {
                   $('.zipcode').text('*This Field is Required');

               } else {
                   $('.zipcode').text(' ');

               }
               if (address.length == 0) {
                   $('.address').text('*This Field is Required');

               } else {
                   $('.address').text('');

               }

               if (name.length == 0 || email.length == 0 || phone.length == 0 || zipcode.length == 0 || address
                   .length == 0) {
                   return false;
               }

           },

           // Sets up the transaction when a payment button is clicked
           createOrder: (data, actions) => {


               return actions.order.create({
                   purchase_units: [{
                       amount: {
                           value: 25 // Can also reference a variable or function
                       }
                   }]
               });
           },
           // Finalize the transaction after payer approval
           onApprove: (data, actions) => {
               return actions.order.capture().then(function(orderData) {
                   // Successful capture! For dev/demo purposes:
                   // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                   const transaction = orderData.purchase_units[0].payments.captures[0];
                   // alert(
                   // `Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`
                   //); 

                   var name = $('#name').val();
                   var email = $('#email').val();
                   var phone = $('#phone').val();
                   var zipcode = $('#zipcode').val();
                   var address = $('#address').val();
                   var real_price = $('#real_price').val();
                   var inp_qty = $('#inp_qty').val();

                   var data = {
                       'name': name,
                       'email': email,
                       'phone': phone,
                       'zipcode': zipcode,
                       'address': address,
                       'payment_id': transaction.id,
                       'real_price': real_price,
                       'inp_qty': inp_qty,
                       'placeOrderBtn': true,
                   };

                   $.ajax({
                       type: "POST",
                       url: "placeorder.php",
                       data: data,
                       success: function(response) {
                           if (response == 201) {
                               alert("Order Placed SuccessFully !!");
                               window.location.href = 'thankyou.php';
                           } else if (response == 500) {
                               alert(" SomeThing went Wrong!!");
                               window.location.href = 'checkout.php';
                           }
                       }
                   });

                   // When ready to go live, remove the alert and show a success message within this page. For example:
                   // const element = document.getElementById('paypal-button-container');
                   // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                   // Or go to another URL:  actions.redirect('thank_you.html');
               });
           }
       }).render('#paypal-button-container');
       </script>
       <script>
       var inp_quantity = document.querySelector("#inp_qty");
       var total_price = document.querySelector("#total_price");
       var real_price = document.querySelector("#real_price");

       function Total() {
           total_price.innerText = (inp_quantity.value) * 25;
           real_price.innerHTML = (inp_quantity.value) * 25;

       }
       Total();
       </script>
       <script src="assets/js/bootstrap.bundle.min.js"></script>
       <script src="assets/js/jquery-3.6.3.min.js"></script>
   </body>

   </html>