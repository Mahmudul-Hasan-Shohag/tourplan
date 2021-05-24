<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3 style="color:red">Confirm Your Payment.Ignore if field do not match!</h3>

<div>
  <form action="{{route('payment.create')}}" method="post">
  @csrf
  <label for="country">Select Payment Method*</label>
    <select id="country" name="payment_method">
      <option value="cash in delivery">Cash in delivery</option>
      <option value="bkash">Bkash</option>
      <option value="Nogod">Nogod</option>
      <option value="Rocket">Rocket</option>
    </select>
    
    <label for="trans_number">Transaction Number</label>
    <input type="text"  name="trans_number">

    <label for="mobile_number">Mobile Number</label>
    <input type="text"  name="mobile_number">

    <label for="refference">Refference</label>
    <input type="text"  name="refference">

    <input type="hidden"  name="cus_id" value="{{auth()->user()->id}}">
    <input type="hidden"  name="cus_name" value="{{auth()->user()->name}}">
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
