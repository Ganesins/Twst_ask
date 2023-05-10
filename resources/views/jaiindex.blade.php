<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recipt</title>
<body>
	<form method="post" action="store">
		@csrf
	<h1>Invoice Recipt</h1>
	CustomerName:<input type="text" name="customername"><br>
	Date:<input type="date" name="date"><br>

<h1>Bill To</h1>
Name:<input type="text" name="name"><br>
Addres:<input type="text" name="address"><br>
state:<input type="text" name="state"><br>
Mobile:<input type="tel" name="mobile"><br>
Email:<input type="email" name="email"><br>
Gstin:<input type="text" name="gst"><br>
Pan:<input type="text" name="pan"><br>

<h1>Bank Detail</h1>
Account Name:<input type="text" name="acname"><br>
Acconnt Number:<input type="number" name="acnumber"><br>
Ifsc code:<input type="number" name="ifsc"><br>
InvoiceNo:<input type="text" name="invoiceno"><br>
<a href="/jai">
<input type="submit" name="" value="save"></a>
</form>
</body>
</html>

