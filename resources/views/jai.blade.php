<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                        <div class="col-6">
                            <h1 class="text-white">web Solution</h1>
                        </div>
                        <div class="col-6">
                            <div class="company-details">
                                <p class="text-white">True ext web solution</p>
                                <p class="text-white">Trust|value|best</p>
                                <p class="text-white">+91 888555XXXX</p>
                                <p class="text-white">PAN NO:our pan</p>
                                <p class="text-white">Gstin:our Gst</p> 


                            </div>
                        </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice/Reciept</h2>
                    @foreach($jai as $jai)
                    <p class="sub-heading">Order Date: 
                        {{ $jai->created_at}}  </p>
                    <!-- <p class="sub-heading">Email Address: customer@gfmail.com </p> -->
                </div>
                <div class="col-6">
                    <p class="sub-heading">Invoice:Tws-11{{$jai->id}}  </p>
                    <p class="sub-heading">customer:{{$jai->customername}}  </p>
                   

                </div>
            </div>
        </div>

        <div class="body-section">
          <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Billto:</h2>
                    <p class="sub-heading">{{$jai->name}}</p>
                   <p>{{$jai->address}}</p><br>
            <p>{{$jai->state}}</p><br>
            <p>india</p><br>
            Mo:{{$jai->mobile}}<br>
            Email:{{$jai->email}}<br>
            Gstin:{{$jai->gst}}<br>
            PanNo:{{$jai->pan}}<br><br>

                </div>
                <div class="col-6">
                    <p class="sub-heading">Payment Information:  </p>
                    <p class="sub-heading">Bank Details </p>
                  <p class="sub-heading">Account Name:{{$jai->acname}}  </p>
                 <p class="sub-heading">Account Number:{{$jai->acnumber}}  </p>
                 <p>IFSC code:{{$jai->ifsc}}</p>



                    <p class="sub-heading">Invoice/Recipt:#{{$jai->invoice}} </p>
                    <p class="sub-heading">Customer:{{$jai->customername}}  </p>
                 @endforeach


                </div>
            </div>

            <table class="table-bordered">
                <thead>
                  Items
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Name</td>
                        <td>10</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> 10.XX</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> 2</td>
                    </tr>
                    <tr>
                        <td colspan="F3" class="text-right">Grand Total</td>
                        <td> 12.XX</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Total: 0088Rs</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
                     <div style="float:right;margin-bottom: 40px;">
                       <p>Regards:Ankit</p>
                      <p>Thank you for choosing</p>
                     </div> 


        </div>
     

        <div class="body-section">
            <p>&copy; Copyright 2021 -  All rights reserved. 
                <a href="#" class="float-right">www.sins.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>