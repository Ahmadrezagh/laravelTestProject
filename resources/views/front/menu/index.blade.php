@extends('layouts.front')
@section('title','Menu')
@section('content')
    <!-- content -->

    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <article id="post-3107" class="post-3107 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <style type="text/css"
                                                   media="all">#fmp-container-527208931 .fmp-title h3, #fmp-container-527208931 .fmp-content h3, #fmp-container-527208931 .fmp-content h3 a, #fmp-container-527208931 h3.fmp-title, #fmp-container-527208931 h3.fmp-title a, #fmp-container-527208931 .fmp-title h3 a {
                                                }

                                                #fmp-container-527208931 .fmp-content h3 a:hover, #fmp-container-527208931 h3.fmp-title a:hover, #fmp-container-527208931 .fmp-title h3 a:hover {
                                                }

                                                #fmp-container-527208931 .fmp-box .fmp-price, #fmp-container-527208931 .fmp-content-wrap .price {
                                                }

                                                #fmp-container-527208931 .fmp-cat1 .fmp-cat-title:after,
                                                #fmp-container-527208931 .fmp-layout1 .fmp-box span.fmp-price {
                                                    background: #0367bf;
                                                }

                                                #fmp-container-527208931 .fmp-cat1 .fmp-media-body h3, #fmp-container-527208931 .fmp-cat2 .fmp-box ul.menu-list li, #fmp-container-527208931 .fmp-cat1 .fmp-media-body h3 {
                                                    border-color: #0367bf;
                                                }

                                                #fmp-container-527208931 .fmp-box .fmp-title p, #fmp-container-527208931 .fmp-content-wrap > p, #fmp-container-527208931 .fmp-media-body > p, #fmp-container-527208931 .fmp-box li > p, #fmp-container-527208931 .fmp-content > p, #fmp-container-527208931 .fmp-media-body .info-part > p {
                                                }

                                                #fmp-container-527208931 .fmp-category-title, #fmp-container-527208931 .fmp-cat-title h2 {
                                                }</style>
                                            <div class="fmp-container-fluid fmp-wrapper fmp "
                                                 id="fmp-container-527208931" data-sc-id="3109"
                                                 data-layout="custom-isotope-redchili-3" data-desktop-col="3"
                                                 data-tab-col="2" data-mobile-col="1">
                                                <div class="fmp-row fmp-custom-isotope-redchili-3 fmp-even fmp-isotope-layout">
                                                    <div class="fmp-iso-filter">
                                                        <div id="iso-button-527208931"
                                                             class="fmp-isotope-buttons button-group filter-button-group option-set">
                                                            <button data-filter="*" class="selected">Show all</button>
                                                            @foreach($categories as $category)
                                                            <button data-filter=".cat_{{$category->id}}">{{$category->name}}</button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="fmp-isotope" id="fmp-isotope-527208931"
                                                         style="position: relative; height: 1193.84px;">
                                                        @foreach($products as $product)
                                                        <div class="fmp-col-lg-4 fmp-col-md-4 fmp-col-sm-6 fmp-col-xs-12  fmp-grid-item fmp-isotope-item even-grid-item  @foreach($product->categories as $productCategory) cat_{{$productCategory->id}} @endforeach "
                                                             style="height: auto; position: absolute; left: 0px; top: 0px;">

                                                            <div class="food-menu4-box">
                                                                <img width="1024" height="575"
                                                                     src="{{url($product->image)}}"
                                                                     class="fmp-feature-img" alt="" loading="lazy">
                                                                <span><span class="fmp-price"><span
                                                                                class="fmp-price-amount amount"><span
                                                                                    class="fmp-price-currencySymbol">$</span>{{$product->price}}</span></span></span>
                                                                <div class="food-menu4-box-title">
                                                                    <h3>
                                                                        <a
                                                                           href="{{$product->page_url}}"
                                                                           target="_blank"
                                                                          >{{$product->name}}</a>
                                                                    </h3>
                                                                    <p>{!! \Illuminate\Support\Str::limit($product->description,100) !!}</p>
                                                                    <a href="{{$product->page_url}}"
                                                                       class="default-btn fmp-btn-read-more">Read
                                                                        more</a>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- //content -->
@endsection