@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')


<div class="section_admin_notifications">
    <div class="admin_notifications_title">Notifications</div>
    <div class="admin_notifications_block">
{{--<div class="admin_notifications_block_item">--}}
{{--    <div class="admin_notifications_block_item_inner">--}}
{{--    <div class="admin_notifications_block_item_section">--}}
{{--        <div  class="admin_notifications_block_item_section1" >--}}
{{--            <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item_section2">--}}
{{--            <div class="admin_notifications_block_item_section2_block1">--}}
{{--        <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--            <div>--}}
{{--                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--            </div>--}}
{{--            </div>--}}
{{--    <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--            <div>--}}
{{--                <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--            </div>--}}
{{--    <div class="admin_notifications_block_item_section2_block2">--}}
{{--        <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--        <div>--}}
{{--            <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--    </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="admin_notifications_block_item">--}}
{{--            <div class="admin_notifications_block_item_inner">--}}
{{--                <div class="admin_notifications_block_item_section">--}}
{{--                    <div  class="admin_notifications_block_item_section1" >--}}
{{--                        <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_notifications_block_item_section2">--}}
{{--                        <div class="admin_notifications_block_item_section2_block1">--}}
{{--                            <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                <img src="{{asset('images')}}/ok.png" alt="" class="ok_image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                        <div>--}}
{{--                            <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                            <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2_block2">--}}
{{--                            <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                            <div>--}}
{{--                                <button class="admin_notifications_blocks_title5 myBtn_1">More details</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
</div>

{{--<script src="{{asset('js/index.js')}}"></script>--}}
    <script src="{{asset('js/admin/adminnotifications.js')}}"></script>
</body>
</html>
