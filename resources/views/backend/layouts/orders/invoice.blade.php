
<!DOCTYPE html><html
lang="en"><head
itemscope="" itemtype="http://schema.org/WebSite"><title
itemprop="name"> Receipt page</title><meta
http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta
name="description" content="Preview Bootstrap snippets. Receipt page. Copy and paste the html, css and js code for save time, build your app faster and responsive"><meta
name="keywords" content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js"><meta
content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"><meta
name="viewport" content="width=device-width"><link
rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico"><link
rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png"><link
rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png"><link
rel="canonical" href="https://www.bootdey.com/snippets/preview/Receipt-page" itemprop="url"><meta
property="twitter:account_id" content="2433978487" /><meta
name="twitter:card" content="summary"><meta
name="twitter:card" content="summary_large_image"><meta
name="twitter:site" content="@bootdey"><meta
name="twitter:creator" content="@bootdey"><meta
name="twitter:title" content="Preview Bootstrap  snippets. Receipt page"><meta
name="twitter:description" content="Preview Bootstrap snippets. Receipt page. Copy and paste the html, css and js code for save time, build your app faster and responsive"><meta
name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-482.png"><meta
name="twitter:url" content="https://www.bootdey.com/snippets/preview/Receipt-page"><meta
property="og:title" content="Preview Bootstrap  snippets. Receipt page"><meta
property="og:url" content="https://www.bootdey.com/snippets/preview/Receipt-page"><meta
property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-482.png"><meta
property="og:description" content="Preview Bootstrap snippets. Receipt page. Copy and paste the html, css and js code for save time, build your app faster and responsive"><link
rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="http://bootdey.com/rss" /><link
rel="author" href="https://plus.google.com/u/1/106310663276114892188"/><link
rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts"/><meta
name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" /> <script src="/cache-js/cache-1598759682-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script> </head><body><div
id="snippetContent"><link
rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> <div
class="container bootdey"><div
class="row invoice row-printable"><div
class="col-md-10"><div
class="panel panel-default plain" id="dash_0"><div
class="panel-body p30"><div
class="row"><div
class="col-lg-6"><div
class="invoice-logo"><img
width="100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Invoice logo"></div></div><div
class="col-lg-6">
<div class="invoice-from">
<ul class="list-unstyled text-right">
<li><h3>Sonamony Tour and Travels</h3></li>
<li>Location: Uttara,Dhaka-1230</li>
<li>Cell:01642-469922</li>
<li>Email: sonamony@gmail.com</li>
<li>Date: {{date('d/m/y')}}</li>
</ul>
</div>
</div>
<div class="col-lg-12"><div
class="invoice-details mt25">


<div class="invoice-to mt25">
<ul class="list-unstyled">
<li> <strong>Invoiced To</strong></li>
<li>Name:{{$order->orderOrderdetails->cus_name}}</li>
<li>ID:{{$order->orderOrderdetails->customer_id}} </li>
<li>Address:{{$order->orderOrderdetails->cus_address}}</li>
<li>Mobile:{{$order->orderOrderdetails->cus_mobile}}</li>
<li>Email :{{$order->orderOrderdetails->cus_email}}</li>
<li>Order Date :{{$order->orderOrderdetails->order_date}}</li>
</ul>
</div>
<div class="invoice-items">
<div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
<table class="table table-bordered">
<thead>
<tr>
<th class="per70 text-center">Product Name</th>
<th class="per5 text-center">Quantity</th>
<th class="per25 text-center">Unit Price</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{$order->product_name}}</td>
<td class="text-center">{{$order->quantity}}</td>
<td class="text-center">{{$order->unit_price}}</td>
</tr>
</tbody>
<tfoot>



<tr>
<th colspan="2" class="text-right">Total:</th>
<th class="text-center">{{$order->orderOrderdetails->totalprice}}</th>
</tr>
</tfoot>
</table>
<h3> Thank you for choosing our products</h3>
</div>
</div>

 <a href="#" class="btn btn-default ml15" onclick="window.print()"><i
class="fa fa-print mr5"></i> Print</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<style type="text/css">body{
    margin-top:10px;
    background:#eee;    
}</style> <script type="text/javascript"></script> </div></body></html>