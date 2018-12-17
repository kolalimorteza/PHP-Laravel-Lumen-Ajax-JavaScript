<!DOCTYPE html>
<html>
<head>

    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/grids.css" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="public/img/favicon.ico"/>
    <title>Vaimo Store Best eCommerce Platforms. Make Your Own Online Store Today! </title>
</head>
<body>
<!-- header starts -->

<div id="header" class="rows">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6  ">
                <div>
                    <!-- logo start -->
                    <div class="logo">
                        <a href="#"></a>
                    </div>
                    <!-- logo end -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6   ">
                <div>
                    <!-- responsie menu start -->
                    <div class="cart-click">
                        <span class="cart-logo"></span>
                        <span class="hamber-logo"></span>
                    </div>
                    <!-- responsie menu end-->

                    <!-- cart start -->
                    <div class="cart ">
                        <!-- cartbox -->
                        <div class="cartbox">
                            <span class="img-cart"></span>
                            <span class="cart-cont" id="carttotalItems"></span>
                            <span class="price" id="carttotalPrice"></span>
                        </div>
                        <!-- hover-cart -->
                        <div class="hover-cart">
                            <ul id="cartitems"></ul>
                            <!-- CHECKOUT button  -->
                            <div class="checkout">
                                <a href="#">
                                    Go To CHECKOUT
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- cart end -->
                </div>
            </div>


        </div>
        <!-- responsive menu start -->
        <div class="responsive">
            <div class="r-menu">
                <ul>
                    <li><a href="#">WOMEN</a></li>
                    <li><a href="#">MEN</a></li>
                    <li><a href="#">JUNIOR</a></li>
                    <li><a href="#">ACCESSORIES</a></li>
                    <li><a href="#">COLLECTIONS</a>
                        <!-- sub menu1 start -->
                        <ul class="sub1">
                            <li><a href="#">2014</a></li>
                            <li><a href="#">2013</a></li>
                            <li><a href="#">2012</a>
                                <!-- sub menu2 start -->
                                <ul class="sub2">
                                    <li><a href="#">SUMMER</a></li>
                                    <li><a href="#">AUTUMN</a></li>
                                    <li><a href="#">WINTER</a></li>
                                    <li><a href="#">SPRING</a></li>
                                </ul>
                                <!-- sub menu2 end -->
                            </li>
                            <li><a href="#">2011</a></li>
                        </ul>
                        <!-- sub menu1 end -->
                    </li>
                    <li><a class="red" href="#">SALE</a></li>
                    <li><a class="red" href="#" id="CartAdd">MY ACCOUNT</a></li>

                </ul>
            </div>

            <div class="hover-cart r-cart">
                <ul>
                </ul>
                <!-- CHECKOUT button  -->
                <div class="checkout">
                    <a href="#">
                        Go To CHECKOUT
                    </a>
                </div>
            </div>
        </div>
        <!-- responsive menu end -->

    </div>
</div>
<!-- header ends -->

<!-- navigation starts -->

<div id="navigation" class="rows">
    <div class="container">
        <div class="row">

            <!-- menu start -->
            <div class="col-lg-10 col-md-12 ">
                <div>

                    <div class="menu">
                        <ul>
                            <li><a href="#">WOMEN</a></li>
                            <li><a href="#">MEN</a></li>
                            <li><a href="#">JUNIOR</a></li>
                            <li><a href="#">ACCESSORIES</a></li>
                            <li><a href="#">COLLECTIONS</a>
                                <!-- sub menu1 start -->
                                <ul class="sub1">
                                    <li><a href="#">2014</a></li>
                                    <li><a href="#">2013</a></li>
                                    <li><a href="#">2012</a>
                                        <!-- sub menu2 start -->
                                        <ul class="sub2">
                                            <li><a href="#">SUMMER</a></li>
                                            <li><a href="#">AUTUMN</a></li>
                                            <li><a href="#">WINTER</a></li>
                                            <li><a href="#">SPRING</a></li>
                                        </ul>
                                        <!-- sub menu2 end -->
                                    </li>
                                    <li><a href="#">2011</a></li>
                                </ul>
                                <!-- sub menu1 end -->
                            </li>
                            <li><a class="red" href="#">SALE</a></li>

                        </ul>
                    </div>

                </div>
            </div>
            <!-- menu end -->

            <!-- account start -->
            <div class="col-lg-2 col-md-12 ">
                <div>
                    <div class="account">
                        <a href="#">
                            MY ACCOUNT
                        </a>
                    </div>
                </div>

            </div>
            <!-- account end -->
        </div>
    </div>
</div>
<!-- navigation ends -->
@yield('content')

<!-- footer starts -->

<div id="footer" class="rows">
    <div class="container">
        <div class="row">

            <!-- Top Categories and    Customer Service start -->
            <div class="col-lg-6  col-md-12 md-center">

                <div>
                    <div class="row">
                        <div class="col-lg-6 col-xsm-12">
                            <div>
                                <div class="categories">
                                    <!-- title -->
                                    <h5>Top Categories </h5>
                                    <ul>
                                        <li><a href="#">WOMEN</a></li>
                                        <li><a href="#">MEN</a></li>
                                        <li><a href="#">JUNIOR</a></li>
                                        <li><a href="#">ACCESSORIES</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xsm-12">
                            <div>
                                <div class="service">
                                    <!-- title -->
                                    <h5>Customer Service </h5>
                                    <ul>
                                        <li><a href="#">RETURNS</a></li>
                                        <li><a href="#">SHIPPING</a></li>
                                        <li><a href="#">ABOUT US</a></li>
                                        <li><a href="#">CONTACT US</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Top Categories and    Customer Service end -->
            <!-- NEWSLETTER SUBSCRIBE start -->
            <div class="col-lg-6 col-md-12 col-xsm-12">
                <div>
                    <div class="subscribe">
                        <h5>
                            NEWSLETTER SUBSCRIBE
                        </h5>
                        <div class="input">
                            <form action="{{ route('newsletter.subscribe') }}" method="post" id="subscribeForm">
                                <input type="text" name="email" placeholder="Enter your email address">
                                <span class="letter"></span>
                                <button type="button" id="subscribeEmail">SUBSCRIBE</button>
                            </form>
                            <div class="text">
                                <span class="success">Subscription successful.</span>
                                <span class="faild">Email verification failed...</span>
                                <span class="process">Subscribing to newsletter...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NEWSLETTER SUBSCRIBE end -->
        </div>
    </div>
</div>
<!-- footer ends -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="public/js/template"></script>
<script>
        const DATATIMEOUT = 60;
        //cart data should be fetch with an Ajax request
        function fetchData(loopload){
            var chkload = loopload;
            //https://crossorigin.me/
            let url = 'http://frontend-candidate.vaimo.com/morteza.kolali/public/cart/get';
            // let url = 'public/proxy.php';
            
            fetch(url)
            .then(response=>{
                return response.json()
            })
            .then(data=>{
                //now we need to check if the data is new ENOUGH
                let totalitem = data.totalItems;
                var totalprice = data.totalPrice;
                let allItemsCart = data.items;
                let alldata = null;
                let totalprices = null;
                let itemValue = null;
                var countloop  = 0 ;
                var countinner = 0 ;
                var cartitems  = document.getElementById('cartitems');
                let carttotalItems  = document.getElementById('carttotalItems');
                let oldtotalItems = localStorage.getItem('vaimo-totalItems');
                if( oldtotalItems ){
                    //we have data
                    if( chkload != 0 || chkload === undefined){
                    localStorage.setItem('vaimo-totalItems', totalitem);
                    alldata = JSON.stringify(data);
                    localStorage.setItem('vaimo-all', alldata);
                    totalprices = JSON.stringify(totalprice);
                    localStorage.setItem('vaimo-totalPrice', totalprices);
                    itemValue = JSON.stringify(allItemsCart);
                    localStorage.setItem('vaimo-details', itemValue);
                    
                    cartBoxTotalItem(totalitem,'carttotalItems');
                    cartBoxTotalprice(totalprice,'carttotalPrice');
                    
                    for (key in data.items){
                        for (innerkey in data.items[key]){
                             if (countloop == 0 ){
                                createEachCartItem(data.items[key]['imgSrc'],data.items[key]['name'],data.items[key]['qty'],data.items[key]['price'],0,'cartitems');
                             }
                             if (countloop == 1 && countinner == 4) {
                                createEachCartItem(data.items[key]['imgSrc'],data.items[key]['name'],data.items[key]['qty'],data.items[key]['price'],1,'cartitems');
                             }
                             countinner++;
                        }
                        countloop++;
                     }
                        console.log('Cart Updated');
                     }else{
                        //no update required
                          let oldPrice = localStorage.getItem('vaimo-totalPrice');
                          let allDataCartold = localStorage.getItem('vaimo-all');
                          var cartContact = JSON.parse(allDataCartold);
                          console.log('parsedJSON details old cart:' + cartContact);
                          cartBoxTotalItem(oldtotalItems,'carttotalItems');
                          cartBoxTotalprice(cartContact.totalPrice,'carttotalPrice');
                    
                    for (key in cartContact.items){
                        for (innerkey in cartContact.items[key]){
                             if (countloop == 0 ){
                                createEachCartItem(cartContact.items[key]['imgSrc'],cartContact.items[key]['name'],cartContact.items[key]['qty'],cartContact.items[key]['price'],0,'cartitems');
                             }
                             if (countloop == 1 && countinner == 4) {
                                createEachCartItem(cartContact.items[key]['imgSrc'],cartContact.items[key]['name'],cartContact.items[key]['qty'],cartContact.items[key]['price'],1,'cartitems');
                             }
                             countinner++;
                        }
                        countloop++;
                     }
                        console.log('Cart IS Up to Date - no update required');
                     }
                     loopload++;
                }else{
                    //no data
                    localStorage.setItem('vaimo-totalItems', totalitem);
                    alldata = JSON.stringify(data);
                    localStorage.setItem('vaimo-all', alldata);
                    totalprices = JSON.stringify(totalprice);
                    localStorage.setItem('vaimo-totalPrice', totalprices);
                    itemValue = JSON.stringify(allItemsCart);
                    localStorage.setItem('vaimo-details', itemValue);
                    cartBoxTotalItem(totalitem,'carttotalItems');
                    cartBoxTotalprice(totalprice,'carttotalPrice');
                    
                    for (key in data.items){
                        for (innerkey in data.items[key]){
                             if (countloop == 0 ){
                                createEachCartItem(data.items[key]['imgSrc'],data.items[key]['name'],data.items[key]['qty'],data.items[key]['price'],0,'cartitems');
                             }
                             if (countloop == 1 && countinner == 4) {
                                createEachCartItem(data.items[key]['imgSrc'],data.items[key]['name'],data.items[key]['qty'],data.items[key]['price'],1,'cartitems');
                             }
                             countinner++;
                        }
                        countloop++;
                     }
                    console.log('Cart fetched and created');
                    loopload++;
                }
            })
            .catch(err=>{
                console.log(JSON.stringify(err, null, 2));
            })
            return fetchData;
        }
     function cartBoxTotalItem(totalitem,elementtotalitem){
       return document.getElementById(elementtotalitem).innerHTML = totalitem + 
                    ' items in your cart';
     }
     function cartBoxTotalprice(totalprice,elementtotalprice){
        return document.getElementById(elementtotalprice).innerHTML ='€' + totalprice;
     }
     function createEachCartItem(imgSrc, name, qty, price, flags, elementName){
         var resultCartdesign = null;
        if (flags == 0 ){
           return document.getElementById(elementName).innerHTML = '<li><img src="public/'+imgSrc+'" alt="Vaimo" ><div class="info"><a href="#" class="name"> '+name+'</a> <span class="price">'+qty+' x €'+price+'</span></div><span class="close"></span></li>';
        }else{
          return document.getElementById(elementName).innerHTML += '<li><img src="public/'+imgSrc+'" alt="Vaimo" ><div class="info"><a href="#" class="name"> '+name+'</a> <span class="price">'+qty+' x €'+price+'</span></div><span class="close"></span></li>';
        }
     }
     function init(){
             //once every 20 seconds
            //let timmy = setInterval(fetchData(), 20000); 
            window.setInterval( fetchData(0) , 60000 );
        }
        document.addEventListener('DOMContentLoaded', init);
</script>
<script>
    $(document).ready(function () {
        $("#subscribeEmail").click(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '{{ route('newsletter.subscribe') }}',
                data: {
                    email: $('#subscribeForm').find("input[name='email']").val()
                },
                beforeSend: function () {
                    $('.success').css('display', 'none');
                    $('.process').css('display', 'block');
                    $('.faild').css('display', 'none');
                },
                success: function (data) {
                    $('.success').css('display', 'block');
                    $('.process').css('display', 'none');
                    $('.faild').css('display', 'none');
                },
                error: function() {
                    $('.faild').css('display', 'block');
                    $('.success').css('display', 'none');
                    $('.process').css('display', 'none');
                }
            });
        });
        
    });
</script>
</body>
</html>