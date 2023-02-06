$(document).ready(function () {
  $(".increment-btn").on("click", function (e) {
    e.preventDefault();
    var qty = $(this).closest(".product-data").find(".input-qty").val();
    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if (value < 20) {
      value++;
      $(this).closest(".product-data").find(".input-qty").val(value);
    }
  });

  $(".decrement-btn").on("click", function (e) {
    e.preventDefault();
    var qty = $(this).closest(".product-data").find(".input-qty").val();
    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
      value--;
      $(this).closest(".product-data").find(".input-qty").val(value);
    }
  });

  $(".addToCartBtn").on("click", function (e) {
    e.preventDefault();
    var qty = $(this).closest(".product-data").find(".input-qty").val();
    var prod_id = $(this).val();
    $.ajax({
      type: "POST",
      url: "functions/handleCart.php",
      data: {
        prod_id: prod_id,
        prod_qty: qty,
        scope: "add",
      },
      success: function (response) {
        if (response == 201) {
          alertify.success("Product added to Cart SuccessFully!!");
        } else if (response == "already") {
          alertify.success("Product Already Exists in Cart !!");
        } else if (response == 401) {
          alertify.success("Please Login to Continue!!");
        } else if (response == 500) {
          alertify.success(" Internal Server Error!!");
        }
      },
    });
  });
  $(document).on("click", ".updateQty", function () {
    var qty = $(this).closest(".product-data").find(".input-qty").val();
    var prod_id = $(this).closest(".product-data").find(".prodId").val();

    $.ajax({
      type: "POST",
      url: "functions/handleCart.php",
      data: "data",
      data: {
        prod_id: prod_id,
        prod_qty: qty,
        scope: "update",
      },
      success: function (response) {},
    });
  });
  $(document).on("click", ".deleteItem", function () {
    var cart_id = $(this).val();
    // alert(cart_id);
    $.ajax({
      type: "POST",
      url: "functions/handleCart.php",
      data: "data",
      data: {
        cart_id: cart_id,
        scope: "delete",
      },
      success: function (response) {
        if (response == 200) {
          alertify.success("Item Deleted From Cart !!");
          $("#mycart").load(location.href + " #mycart");
        } else {
          alertify.success(response);
        }
      },
    });
  });
});
