<form action="#" method="post">

    <h1>Payment form</h1>
  
    <section>
      <label for="cc-number">Card number</label>
      <input id="cc-number" name="cc-number" autocomplete="cc-number" inputmode="numeric" pattern="[\d ]{10,30}" title="must be contain at least 10 numbers" required>
    </section>
  
    <section id="cc-exp-csc">
      <div>
        <label for="cc-csc">Package Number</label>
        <input id="cc-csc" name="cc-csc" autocomplete="cc-csc" inputmode="numeric" maxlength="3" required>
      </div>
    </section>

    <section>
        <label for="cc-number">Amount</label>
        <input id="cc-number" name="cc-number" autocomplete="cc-number" inputmode="numeric" >
      </section>
  
    <button id="complete-payment">Complete payment</button>
  
  </form>