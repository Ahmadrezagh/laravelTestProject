@extends('layouts.front')
@section('title')
    {{$product->name}}
@endsection
@section('content')
    <!-- content -->
                    <div class="single-menu-area content-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 leftside-container">
                                    <img width="800" height="532"
                                         src="{{url($product->image)}}"
                                         class="attachment-full size-full wp-post-image" alt="{{$product->name}}"
                                         sizes="(max-width: 800px) 100vw, 800px">
                                    <div class="fmp-col-md-12 fmp-col-lg-12 fmp-col-sm-12 fmp-images no-padding-lr">
                                        <div id="images">
                                            <div class="fmp-single-food-img-wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="single-menu-inner fmp-col-md-12 fmp-col-lg-12 fmp-col-sm-12 fmp-images no-padding-lr">
                                        <div class="single-menu-inner-content">


                                            <div class="food-price "><span class="price"><span
                                                            class="fmp-price-amount amount"><span
                                                                class="fmp-price-currencySymbol">$</span>26</span></span>
                                            </div>


                                            <div class="inner-sub-title ">
                                                <div>Availability : {{($product->in_stock == 1) ? "In stock" : "Out of stock"}}</div>
                                            </div>

                                            <p>{!! $product->description !!}</p>
                                        </div>
                                        <div class="owl-wrap rt-owl-nav-3 related-products other-menu">
                                            <h2 class="inner-sub-title title-bar-big-left-close">You may Also like</h2>
                                            <div class="owl-custom-nav">
                                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                            </div>
                                            <div class="owl-custom-nav-bar"></div>
                                            <div class="clear"></div>
                                            <div class="rt-owl-carousel owl-carousel owl-theme owl-loaded owl-drag"
                                                 data-carousel-options="{&quot;nav&quot;:false,&quot;dots&quot;:false,&quot;autoplay&quot;:true,&quot;autoplayTimeout&quot;:&quot;5000&quot;,&quot;autoplaySpeed&quot;:&quot;200&quot;,&quot;autoplayHoverPause&quot;:true,&quot;loop&quot;:true,&quot;margin&quot;:30,&quot;responsive&quot;:{&quot;0&quot;:{&quot;items&quot;:1},&quot;480&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:2},&quot;992&quot;:{&quot;items&quot;:3}}}">


                                                <div class="owl-stage-outer">
                                                    <div class="owl-stage"
                                                         style="transform: translate3d(-3179px, 0px, 0px); transition: all 0.2s ease 0s; width: 5780px;">
                                                        @foreach($randomItems as $randomItem)
                                                        <div class="owl-item cloned"
                                                             style="width: 259px; margin-right: 30px;">
                                                            <div class="food-menu2-box">
                                                                <div class="food-menu2-img-holder">
                                                                    <div class="food-menu2-more-holder">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="{{$randomItem->page_url}}"><i
                                                                                            class="fa fa-link"
                                                                                            aria-hidden="true"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <a href="{{$randomItem->page_url}}">
                                                                        <img width="377" height="251"
                                                                             src="{{url($randomItem->image)}}"
                                                                             class="img-responsive wp-post-image" alt=""
                                                                             loading="lazy"
                                                                             sizes="(max-width: 377px) 100vw, 377px">
                                                                    </a>
                                                                </div>
                                                                <div class="food-menu2-title-holder">
						<span>
														<div class="offers"><span class="fmp-price-amount amount"><span
                                                                        class="fmp-price-currencySymbol">$</span>{{$randomItem->price}}</span></div>
						</span>
                                                                    <h3>
                                                                        <a href="{{$randomItem->page_url}}">
                                                                            {{$randomItem->name}}</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="owl-nav disabled">
                                                    <button type="button" role="presentation" class="owl-prev"><span
                                                                aria-label="Previous">‹</span></button>
                                                    <button type="button" role="presentation" class="owl-next"><span
                                                                aria-label="Next">›</span></button>
                                                </div>
                                                <div class="owl-dots disabled"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <div class="rc-sidebar">
                                        <div id="search-2"
                                             class="widget widget_search single-sidebar margin-bottom-sidebar"><h2
                                                    class="widgettitle widget-title-bar title-sidebar title-bar">
                                                Search</h2>
                                            <form role="search" method="get" class="search-form"
                                                  action="{{route('menu.index')}}">
                                                <div class="sidebar-search-area margin-bottom-sidebar">
                                                    <div class="input-group stylish-input-group">
                                                        <input type="text" class="form-control"
                                                               placeholder="Search here ..." value="" name="s">
                                                        <span class="input-group-addon">
				<button type="submit">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="categories-2"
                                             class="widget widget_categories single-sidebar margin-bottom-sidebar"><h2
                                                    class="widgettitle widget-title-bar title-sidebar title-bar">
                                                Categories</h2>
                                            <ul>
                                                @foreach($categories as $sideBarCategoryItem)
                                                <li class="cat-item cat-item-41"><a
                                                            href="{{$sideBarCategoryItem->page_url}}">{{$sideBarCategoryItem->name}}</a>
                                                    ({{$sideBarCategoryItem->products()->count()}})
                                                </li>
                                                @endforeach

                                            </ul>

                                        </div>
                                        <div id="rt-recent-recipe-2"
                                             class="widget rt_widget_recent_recipe_with_image single-sidebar margin-bottom-sidebar">
                                            <h2 class="widgettitle widget-title-bar title-sidebar title-bar">Latest
                                                Recipe</h2>
                                            @foreach($latestProducts as $sideBarLatestProductItem)
                                                <div class="media">
                                                <a href="{{$sideBarCategoryItem->page_url}}"
                                                   class="pull-left" title="Breadsticks with Homemade Pizza Sauce">
                                                    <img width="94" height="84"
                                                         src="{{url($sideBarLatestProductItem->image)}}"
                                                         class="attachment-rdtheme-size2 size-rdtheme-size2 wp-post-image"
                                                         alt="" loading="lazy">

                                                </a>
                                                <div class="media-body">
                                                    <h4>
                                                        <a href="{{$sideBarLatestProductItem->page_url}}">{{$sideBarLatestProductItem->name}}</a></h4>
                                                    <p>{{date('d M, Y',strtotime($sideBarLatestProductItem->created_at))}}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    <!-- //content -->
@endsection