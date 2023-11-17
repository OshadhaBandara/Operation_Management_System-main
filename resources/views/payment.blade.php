@extends('Layouts/front-end-layout')

@section('Content')
{{-- @dd( Session()->all())
 --}}
    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">

            @include('component.error-message') 
             
                <!-- Start Content -->

                <div>
                    <div class="container">
                        <div class="row">

                            <div class="col-12 mt-4">
                                <div class="card p-3">
                                    <p class="mb-0 fw-bold h4">Payment</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card p-3 mb-5">


                                    <div class="collapse show p-3 pt-5" id="collapseExample">
                                        <div class="row">
                                            <div class="col-lg-5 mb-lg-0 mb-3">
                                                <p class="h4 mb-2">Summary</p>
                                                <p class="mb-2"><span class="fw-bold">Product:</span><span class="c-green"> {{ Session('service_type')}}</span>
                                                </p>
                                                <p class="mb-2">
                                                    <span class="fw-bold">Product Price:</span>
                                                    <span class="c-green">: Rs. {{  Session('productItemPrice') }}</span>
                                                </p>

                                                <p class="mb-2">
                                                    <span class="fw-bold">Delivery/Collection Charge:</span>
                                                    <span class="c-green">: Rs. {{  Session('delivery_price') }}</span>
                                                </p>

                                                <p class="mb-2">
                                                    <span class="fw-bold">Total</span>
                                                    <span class="c-green">: Rs. {{Session('productItemPrice') + Session('delivery_price')  }} </span>
                                                </p>

                                                <p hidden class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                                    nihil neque
                                                    quisquam aut
                                                    repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                                    quis,
                                                    iste harum ipsum hic, nemo qui!</p>
                                            </div>
                                            <div class="col-lg-7">
                                                <form action="payment_store" class="form" method="POST">

                                                    @csrf

                                                    {{-- @dd( Session('cid')) --}}
                                                   
                                                    {{-- <input type="text" hidden name="cid" value="Session()->cid"> --}}
                                                    <input type="text" hidden name="service_id" value="{{ Session('service_id')}}">
                                                    <input type="text" hidden name="delivary_method" value="{{Session('delivary_method') }}">
                                                    <input type="text" hidden name="product_item" value="{{Session('product_item') }}">
                                                    <input type="text" hidden name="productItemPrice" value="{{  Session('productItemPrice') }}">
                                                    <input type="text" hidden name="delivery_price" value="{{ Session('delivery_price') }}">
                                                    <input type="text" hidden name="total" value="{{Session('productItemPrice') + Session('delivery_price')  }}">

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form__div">
                                                                <input type="text" name="cardnumber" class="form-control" placeholder=" " >
                                                                <label for="" class="form__label">Card Number</label>
                                                            </div>
                                                            <div class="text-danger">
                                                                <span  style="text-align: center">@error('cardnumber') {{ $message }} @enderror</span>
                                                            </div>
                                                        </div>
            
                                                        <div class="col-6">
                                                            <div class="form__div">
                                                                <input type="text" name="mm/yy" class="form-control" placeholder=" ">
                                                                <label for="" class="form__label">MM / yy</label>
                                                            </div>
                                                            <div class="text-danger">
                                                                <span  style="text-align: center">@error('mm/yy') {{ $message }} @enderror</span>
                                                            </div>
                                                        </div>
            
                                                        <div class="col-6">
                                                            <div class="form__div">
                                                                <input type="password" name="cvv" class="form-control" placeholder=" ">
                                                                <label for="" class="form__label">cvv code</label>
                                                            </div>
                                                            <div class="text-danger">
                                                                <span  style="text-align: center">@error('cvv') {{ $message }} @enderror</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form__div">
                                                                <input type="text" name="cardname" class="form-control" placeholder=" ">
                                                                <label for="" class="form__label">name on the card</label>
                                                            </div>
                                                            <div class="text-danger">
                                                                <span  style="text-align: center">@error('cardname') {{ $message }} @enderror</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                                        </div>                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- End Content -->

        </div>

    </div>

@endsection