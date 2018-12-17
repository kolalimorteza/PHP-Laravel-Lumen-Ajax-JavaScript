@extends('layout')


@section('content')

    <!-- splash starts -->
    <div id="splash" class="rows">
        <div class="container">
            <div class="row">
                <!-- splash  start -->
                <div class="col-lg-6  col-md-12 ">
                    <div>
                        <div class="splash">
                            <!-- img -->
                            <a href="#">
                                <img src="public/img/slide-img.jpg" alt="">
                            </a>
                            <!-- text -->
                            <div class="txt">
                                <h1>
                                    <a href="#">
                                        GET READY FOR THE AUTUMN
                                    </a>

                                </h1>
                                <p>
                                    WE HAVE PREPARED EVERYTHING FOR YOU!
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- splash  end -->
                <!-- vaimo  start -->
                <div class="col-lg-6  col-md-12 ">
                    <div>

                        <div class="vaimo">
                            <h1>
                                <a href="#">
                                    This is Vaimo Store
                                </a>
                            </h1>
                            <h2>
                                YOUR ONE-STOP <br>
                                FASHION DESTINATION
                            </h2>
                            <p>
                                Shop from over 850 of the best brands, including VAIMO’s own label. Plus, get your daily fix of the
                                freshest style, celebrity and music news.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- vaimo  end -->


            </div>
        </div>
    </div>
    <!-- splash ends -->

    <!-- OUR FAVOURITES starts -->
    <div id="fav" class="rows">
        <div class="container">
            <div class="row">
                <!-- title start -->
                <div class="col-lg-12 col-md-12  ">

                    <div>
                        <!-- title -->
                        <h1 class="title">
                            <span>
                                OUR FAVOURITES
                            </span>
                        </h1>
                    </div>
                </div>
                <!-- title end -->
            </div>
            <div class="row">
                <div class="product">
                @php
                    $countP = 0;
                @endphp

                @foreach($products as $product)
                    <!-- column start -->
                        <div class="col-lg-3 col-md-6  ">
                            <div class="box">
                                <!-- img -->
                                <a href="#">
                                    <img src="{{ $product['image']}}" alt="Vaimo">
                                </a>
                                <!-- info -->
                                <div class="info">
                                    <h3>
                                        <a href="#">
                                            {{ $product['name']}}
                                        </a>
                                    </h3>
                                    <span class="price">
                                            € {{ $product['price']}}
                                        </span>
                                    <div class="add">
                                        <button type="button" id="addCart" data-id="{{ $loop->iteration }}">
                                            Add To Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column end -->
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- OUR FAVOURITES ends -->

@stop