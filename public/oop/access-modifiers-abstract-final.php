<pre>
<?php
abstract class PaymentMethod {
  abstract protected function pay($amount);
}

class CreditCard extends PaymentMethod {
  public function pay($amount) {
    return "Paid $amount using Credit Card.\n";
  }
}

class Paypal extends PaymentMethod {
  public function pay($amount) {
    return "Paid $amount using PayPal.\n";
  }
}

final class AMEX extends CreditCard {
  private $balance;

  public function __construct($balance) {
    $this->balance = $balance;
  }

  public function pay($amount) {
    $this->balance -= $amount;
    return "Paid $amount using AMEX.\n";
  }

  public function printBalance() {
    return "AMEX balance: $this->balance.\n";
  }
}

$creditCard = new CreditCard();
echo $creditCard->pay(100);

$paypal = new Paypal();
echo $paypal->pay(200);

$amex = new AMEX(300);
echo $amex->printBalance();
echo $amex->pay(100);
echo $amex->printBalance();
?>
</pre>
