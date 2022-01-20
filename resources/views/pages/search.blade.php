<?php
$contracts=[
    'FOR_SALE'=>'برای فروش',
    'FOR_RENT'=>'برای اجاره'
];
    ?>



@extends('layouts.masterPages.landmark')
@section('content')
<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach($items as $item)
                        <div class="col-sm-6">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">{{$item->is_vip}}</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">{{$item->title}}</a>
                                        </h4>
                                        <span class="location">{{$item->address}}</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="/landmark/images/property/property_1.jpg" alt="Family House in Hudson">
                                        </a>
                                        <span class="property-status">{{$contracts[$item->contract]}}</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i><span>{{$item->area}}</span> <span> متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>{{$item->room_number}}</span><span> خوابه</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i>{{$item->parking_number}} <span> پارکینگ</span>
													</span>
                                        <span class="primary-file-4">
														<i class="icon-bath"></i> <span>{{$item->bath_number}}</span><span> سرویس بهداشتی</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">{{$item->price}} تومان</span>
                                        </div>
                                        <div class="action-post">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه" class="compare" href="#">
                                                <i class="ion-arrow-swap"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <span class="pagination-loop">
									<a class="prev page-numbers" href="#"><i class="ion-ios-arrow-forward"></i></a>
									<a class="page-numbers" href="#">1</a>
									<span class="page-numbers current">2</span>
									<a class="page-numbers" href="#">3</a>
									<a class="next page-numbers" href="#"><i class="ion-ios-arrow-back"></i></a>
								</span>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="widget-title">یافتن ملک</h3>
                            <div class="advanced_search_property vertical">
                                <div class="noo-map">
                                    <div class="gsearch">
                                        <div class="gsearch-wrap">
                                            <form class="gsearchform" action="/search" method="get">
                                                <div class="gsearch-content">
                                                    <div class="gsearch-field">
                                                        <div class="form-group keyword">
                                                            <input type="text" id="keyword" name="title" value="title" placeholder="عبارت مورد جستجو ..." class="keyword" autocomplete="off">
                                                        </div>

                                                        <div class="form-group glocation">
                                                            <div class="label-select">
                                                                <select class="form-control" name="area">
                                                                    <option>همه مناطق</option>
                                                                    <option>ولیعصر</option>
                                                                    <option>شهناز</option>
                                                                    <option>ائل گلی</option>
                                                                    <option>17 شهریور</option>
                                                                    <option>پاستور جدید</option>
                                                                    <option>بهار جنوبی</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group gtype">
                                                            <div class="label-select">
                                                                <select class="form-control" name="type">
                                                                    <option>همه انواع ملک</option>
                                                                    <option>آپارتمان</option>
                                                                    <option>ویلایی</option>
                                                                    <option>زمین</option>
                                                                    <option>منزل مشترک</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group gbed">
                                                            <div class="label-select">
                                                                <select class="form-control" name="room_number">
                                                                    <option>تعداد اتاق خواب</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group gbath">
                                                            <div class="label-select">
                                                                <select class="form-control" name="bath_number">
                                                                    <option>تعداد سرویس بهداشتی</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group ggarage">
                                                            <div class="label-select">
                                                                <select class="form-control" name="parking_number">
                                                                    <option>هر تعداد پارکینگ</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group gprice">
                                                            <span class="gprice-label">قیمت (تومان)</span>
                                                            <div class="price_slider_wrapper widget_price_filter">
                                                                <div class="price_slider" style="display:none;"></div>
                                                                <div class="price_slider_amount" data-currency="" data-step="100000">
                                                                    <input type="hidden" id="min_price" name="min_price" value="" data-min="500000" placeholder="حداقل قیمت">
                                                                    <input type="hidden" id="max_price" name="max_price" value="" data-max="600000000" placeholder="حداکثر قیمت">
                                                                    <div class="price_label" style="display:none;">
                                                                        <span class="from"></span> - <span class="to"></span>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="gsearch-action">
                                                        <div class="gsubmit">
                                                            <button type="submit" class="button">
                                                                <span class="ion-search"></span> جستجوی ملک
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">نمایندگان ویژه</h3>
                            <div class="featured-agent">
                                <div class="agent-item">
                                    <div class="thumbnail">
                                        <a href="agent-detail.html" title="Clark Darik">
                                            <img src="/landmark/images/team/thumb/agent_1.png" alt="Clark Darik">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="agent-detail.html" title="Clark Darik">کلارک کنت </a>
                                        </div>
                                        <span class="total-property">0 ملک </span>
                                    </div>
                                </div>
                                <div class="agent-item">
                                    <div class="thumbnail">
                                        <a href="agent-detail.html" title="Sarah Barabova">
                                            <img src="/landmark/images/team/thumb/agent_2.png" alt="Sarah Barabova">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="agent-detail.html" title="Sarah Barabova">سارا لنس </a>
                                        </div>
                                        <span class="total-property">0 ملک </span>
                                    </div>
                                </div>
                                <div class="agent-item">
                                    <div class="thumbnail">
                                        <a href="agent-detail.html" title="Bruck Banner">
                                            <img src="/landmark/images/team/thumb/agent_3.png" alt="Bruck Banner">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="agent-detail.html" title="Bruck Banner">بروس بنر </a>
                                        </div>
                                        <span class="total-property">0 ملک </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">ملک های اخیر</h3>
                            <div class="recent-property-wrap">
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="/landmark/images/property/thumb/property_1.jpg" alt="Family House in Hudson">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="property-fullwidth.html" title="Family House in Hudson">
                                                لورم ایپسوم متن ساختگی
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Loft Above The City">
                                            <img src="/landmark/images/property/thumb/property_2.jpg" alt="Loft Above The City">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="property-fullwidth.html" title="Loft Above The City">
                                                لورم ایپسوم متن ساختگی
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                            <img src="/landmark/images/property/thumb/property_3.jpg" alt="Villa on Hollywood Boulevard">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                                لورم ایپسوم متن ساختگی با تولید
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
