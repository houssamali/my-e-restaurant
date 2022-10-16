<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .show{
           display:flex; 
           justify-content:center;
           align-items:center;
        }
    </style>
</head>
<body>

<div style="show">
    
<div class="float-start">
 <h3>Name {{$orders->name}}</h3>
 <h4>Number {{$orders->number}}</h4>
 <h2>Order_no: {{$orders->track_no}}</h2>
</div>


 <div class="float-end">
 <h3>Restuarant : Almohamadi</3>
 <h4>Address : Taiz 26 street</h4>
  <h5>Date :{{$orders->created_at}}</h5>
   </div>
 <table class="table">
     <thead>
         <tr>
             <th>Order No</th>
             <th>Item Name</th>
             <th>Item Qty</th>
             <th>Tax</th>
             <th>Item Price</th>
         </tr>
     </thead>

     <tbody>
         @foreach($items as $item)
       <tr>
         <td>{{$orders->id}}</td>
         <td>{{$item->food->name}}</td>
         <td> {{$item->qty}}</td>
         <td>{{'00.00'}}</td>
         <td>{{$item->price}}</td>
         
        
       </tr>
    @endforeach
    
     </tbody>

 </table>
 <h1>Total Rs: {{$orders->total}} </h1>
</div>


</body>
</html>