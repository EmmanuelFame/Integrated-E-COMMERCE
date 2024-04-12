<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Check Out</h2>
    <hr class="mx-auto" />
  </div>
  <div class="mx-auto container">
    <form id="checkout-form" method="POST" action="server\place_order.php">
      <p class="text-center" style="color: red;">
        <?php if (isset($_GET['message'])) {
          echo $_GET['message'];
        } ?>
        <?php if (isset($_GET['message'])) { ?>
          <a href="login.php" style="color:white; font-size: 1.2rem; background-color:grey;" class="btn ">Login</a>
        <?php }; ?>
      </p>
      <div class="form-group checkout-small-element">
        <label for="checkout-name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" id="checkout-name" />
      </div>
      <div class="form-group checkout-small-element">
        <label for="checkout-email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" id="checkout-email" />
      </div>
      <div class="form-group checkout-small-element">
        <label>Phone</label>
        <input type="tel" class="form-control" name="phone" id="checkout-phone" />
      </div>
      <div class="form-group checkout-small-element">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="city name" id="checkout-city" />
      </div>
      <div class="form-group checkout-large-element">
        <label>Address</label>
        <input type="text" class="form-control" name="address" placeholder="address" id="checkout-address" />
      </div>
      <div class="form-group checkout-btn-container">
        <p>Total amount: $
          <?php echo $_SESSION['total']; ?>
        </p>
        <input type="submit" style="color:white; font-size: 1.2rem; background-color:black;" class="btn " name="place_order" value="Place Order" id="checkout-btn" />
      </div>
    </form>
    <h2>Pay with Tinkoff here instead.</h2>
    <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
<form class="payform-tinkoff" name="payform-tinkoff" id="payform-tinkoff">
    <input class="payform-tinkoff-row" type="hidden" name="terminalkey" value="TinkoffBankTest">
    <input class="payform-tinkoff-row" type="hidden" name="frame" value="false">
    <input class="payform-tinkoff-row" type="hidden" name="language" value="ru">
    <input class="payform-tinkoff-row" type="hidden" name="receipt" value="">
    <input class="payform-tinkoff-row" type="text" placeholder="Сумма заказа" name="amount" required>
    <input class="payform-tinkoff-row" type="hidden" placeholder="Номер заказа" name="order">
    <input class="payform-tinkoff-row" type="text" placeholder="Описание заказа" name="description">
    <input class="payform-tinkoff-row" type="text" placeholder="ФИО плательщика" name="name">
    <input class="payform-tinkoff-row" type="email" placeholder="E-mail" name="email">
    <input class="payform-tinkoff-row" type="tel" placeholder="Контактный телефон" name="phone">
    <input class="payform-tinkoff-row payform-tinkoff-btn" type="submit" value="Оплатить">
</form>
<style>
    .payform-tinkoff {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 2px auto;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        max-width: 250px;
    }
    .payform-tinkoff-row {
        margin: 2px;
        border-radius: 4px;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        border: 1px solid #DFE3F3;
        padding: 15px;
        outline: none;
        background-color: #DFE3F3;
        font-size: 15px;
    }
    .payform-tinkoff-row:focus {
        background-color: #FFFFFF;
        border: 1px solid #616871;
        border-radius: 4px;
    }
    .payform-tinkoff-btn {
        background-color: #FBC520;
        border: 1px solid #FBC520;
        color: #3C2C0B;
    }
    .payform-tinkoff-btn:hover {
        background-color: #FAB619;
        border: 1px solid #FAB619;
    }
</style>
<script type="text/javascript">
    const TPF = document.getElementById("payform-tinkoff");

    TPF.addEventListener("submit", function (e) {
        e.preventDefault();
        const {description, amount, email, phone, receipt} = TPF;

        if (receipt) {
            if (!email.value && !phone.value)
                return alert("Поле E-mail или Phone не должно быть пустым");

            TPF.receipt.value = JSON.stringify({
                "EmailCompany": "emmanuelayofame@gmail.com",
                "Taxation": "patent",
                "Items": [
                    {
                        "Name": description.value || "Оплата",
                        "Price": amount.value + '00',
                        "Quantity": 1.00,
                        "Amount": amount.value + '00',
                        "PaymentMethod": "full_prepayment",
                        "PaymentObject": "service",
                        "Tax": "none"
                    }
                ]
            });
        }
        pay(TPF);
    })
</script>

  </div>
</section>