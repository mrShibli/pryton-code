@extends('layouts.app')

@section('title') {{trans('general.subscription_price')}} -@endsection

@section('content')

<section class="section section-sm">
    <div class="container">
        <div class="row justify-content-center text-center mb-sm">
            <div class="col-lg-8 py-5">
                <h2 class="mb-0 font-montserrat"><i class="bi bi-cash-stack mr-2"></i> {{trans('general.subscription_price')}}</h2>
                <p class="lead text-muted mt-0">{{trans('general.info_subscription')}}</p>
            </div>
        </div>
        <div class="row">

            @include('includes.cards-settings')

            <div class="col-md-6 col-lg-9 mb-5 mb-lg-0">

                @if (session('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>

                    {{ session('status') }}
                </div>
                @endif

                @if (count($errors) > 0)
                {{-- @dd($errors) --}}
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>

                    <i class="far fa-times-circle mr-2"></i> {{trans('auth.error_desc')}}
                </div>
                @endif

                @if (auth()->user()->verified_id == 'no' && $settings->requests_verify_account == 'on')
                <div class="alert alert-danger mb-3">
                    <ul class="list-unstyled m-0">
                        <li><i class="fa fa-exclamation-triangle"></i> {{trans('general.verified_account_info')}} <a href="{{url('settings/verify/account')}}" class="text-white link-border">{{trans('general.verify_account')}}</a></li>
                    </ul>
                </div>
                @endif

                @if (auth()->user()->free_subscription == 'no' && auth()->user()->verified_id == 'yes')
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-info-circle mr-2"></i>
                        <span>{{ trans('general.user_gain', ['percentage' => auth()->user()->custom_fee == 0 ? (100 - $settings->fee_commission) : (100 - auth()->user()->custom_fee)]) }}</span>
                    </div>
                @endif
                
                <form method="POST" action="{{ url('settings/subscription') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">

                        {{-- 1 --}}

                        <label><strong>Package 01</strong></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{$settings->currency_symbol}}</span>
                            </div>
                            <input class="form-control form-control-lg isNumber subscriptionPrice" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject' || auth()->user()->free_subscription == 'yes') disabled @endif name="price_one" placeholder="0.00" value="" type="text">
                            @error('price_weekly')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @error('price_one')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-2">
                            <input class="form-control form-control-lg  subscriptionPrice"  name="one_title" placeholder="Title" value="" type="text">
                        </div>
                        @error('one_title')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2 px-4" style="border: 2px solid #cdd4da;">
                            <p class=" mt-3 fileNameResult">Upload image *900x480px</p>
                            <input type="file" class="form-control-file fileInput"  name="one_img">
                        </div>
                        @error('one_img')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2">
                          <textarea class="my-custom-class" name="one_desc">
                            
                          </textarea>
                        </div>
                        @error('one_desc')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject') disabled @endif name="status_one" value="1"  id="customSwitchWeekly">
                          <label class="custom-control-label switch" for="customSwitchWeekly">{{ trans('general.status') }}</label>
                        </div>
                        
                        {{-- 2 --}}

                        <label class="mt-4"><strong>Package 02 *</strong></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{$settings->currency_symbol}}</span>
                            </div>
                            <input class="form-control form-control-lg isNumber subscriptionPrice" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject' || auth()->user()->free_subscription == 'yes') disabled @endif name="two_price" placeholder="0.00" value="" type="text">
                            @error('price')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @error('two_price')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2">
                            <input class="form-control form-control-lg  subscriptionPrice"  name="two_title" placeholder="Title" value="" type="text">
                        </div>
                        @error('two_title')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2 px-4" style="border: 2px solid #cdd4da;">
                            <p class=" mt-3 fileNameResult">Upload image *900x480px</p>
                            <input type="file" class="form-control-file fileInput"  name="two_img">
                        </div>
                        @error('two_img')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2">
                            <textarea class="my-custom-class" name="two_dsc">

                            </textarea>
                        </div>
                        @error('two_dsc')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject') disabled @endif name="status_two" value="1"  id="customSwitchQuarterly">
                          <label class="custom-control-label switch" for="customSwitchQuarterly">{{ trans('general.status') }}</label>
                        </div>

                        {{-- 3 --}}

                        <label class="mt-4"><strong>Package 03</strong></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{$settings->currency_symbol}}</span>
                            </div>
                            <input class="form-control form-control-lg isNumber subscriptionPrice" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject' || auth()->user()->free_subscription == 'yes') disabled @endif  name="price_three" placeholder="0.00" value="" type="text">
                            @error('price_three')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @error('price_three')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2">
                            <input class="form-control form-control-lg  subscriptionPrice"  name="title_three" placeholder="Title" value="" type="text">
                        </div>
                        @error('title_three')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2 px-4" style="border: 2px solid #cdd4da;">
                            <p class=" mt-3 fileNameResult">Upload image *900x480px</p>
                            <input type="file" class="form-control-file fileInput"  name="image_three">
                        </div>
                        @error('image_three')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        <div class="input-group mb-2">
                            <textarea class="my-custom-class" name="desc_three">

                            </textarea>
                        </div>
                        @error('desc_three')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                        
                        <div class="custom-control custom-switch">
                            {{-- <input type="checkbox" class="custom-control-input" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject') disabled @endif name="status_three" value="1" @if (auth()->user()->getPlan('quarterly', 'status')) checked @endif > --}}
                            <input type="checkbox" class="custom-control-input" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject') disabled @endif name="status_three" value="1"  id="customSwitchQuarterly3">
                            <label class="custom-control-label switch" for="customSwitchQuarterly3">{{ trans('general.status') }}</label>
                        </div>
                        <div class="text-muted btn-block mb-4 mt-4">
                            <div class="custom-control custom-switch custom-switch-lg">
                              <input type="checkbox" class="custom-control-input" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject') disabled @endif name="free_subscription" value="yes" @if (auth()->user()->free_subscription == 'yes') checked @endif id="customSwitchFreeSubscription">
                            <label class="custom-control-label switch" for="customSwitchFreeSubscription">{{ trans('general.free_subscription') }}</label>
                        </div>

                    </div><!-- End form-group -->
                    
                    <button class="btn btn-1 btn-success btn-block" @if (auth()->user()->verified_id == 'no' || auth()->user()->verified_id == 'reject') disabled @endif onClick="this.form.submit(); this.disabled=true; this.innerText='{{trans('general.please_wait')}}';" type="submit">
                        {{trans('general.save_changes')}}
                    </button>



                </form>
            </div><!-- end col-md-6 -->
        </div>
    </div>
</section>
@endsection
@section('javascript')
<script>
    // {{-- fileInput --}}
    $(document).ready(function() {
        $(".fileInput").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(".fileNameResult").text("File Name: " + fileName);
        });
    });
</script>
@endsection