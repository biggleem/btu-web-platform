<div class="header_admin">
    <nav class="header_container_admin">
        <div class="buttons_box">
            <div class="dropdown">
                <button class="Bell_img dropbtn">
                    <img src="{{asset('images/BellSimple.png')}}" alt="">
                </button>
                <div class="dropdown-content myDropdown" id="notificationsdropdown">
{{--                    <div class="dropdown_content_block">--}}
{{--                        <span class="notification_title">New notifications</span>--}}
{{--                        <div class="dropdown_notification_block myBtn_1">--}}
{{--                            <img src="{{asset('images/Avatar%2040x40.png')}}" alt=""--}}
{{--                                 class="dropdown_notification_block_img">--}}
{{--                            <div class="dropdown_notification_block_text">--}}
{{--                                <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>--}}
{{--                                <span class="dropdown_notification_block_text2">2 week ago</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="dropdown_notification_block_line">--}}
{{--                    <div class="dropdown_notification_block_2 myBtn_1" >--}}
{{--                        <img src="{{asset('images/Avatar%2040x40.png')}}" alt="" class="dropdown_notification_block_img">--}}
{{--                        <div class="dropdown_notification_block_text">--}}
{{--                            <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>--}}
{{--                            <span class="dropdown_notification_block_text2">2 week ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="dropdown_notification_block_line">--}}
{{--                    <div class="dropdown_notification_block_2 myBtn_1">--}}
{{--                        <img src="{{asset('images/Avatar%2040x40.png')}}" alt="" class="dropdown_notification_block_img">--}}
{{--                        <div class="dropdown_notification_block_text">--}}
{{--                            <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>--}}
{{--                            <span class="dropdown_notification_block_text2">2 week ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="dropdown_notification_block_line">--}}
{{--                    <div class="dropdown_notification_block_2 myBtn_1">--}}
{{--                        <img src="{{asset('images/Avatar%2040x40.png')}}" alt="" class="dropdown_notification_block_img">--}}
{{--                        <div class="dropdown_notification_block_text">--}}
{{--                            <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>--}}
{{--                            <span class="dropdown_notification_block_text2">2 week ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div></div>--}}
                </div>


            </div>
            <a class="sign_out_img" href="{{route('logout')}}">
                <img src="{{asset('images/SignOut.png')}}" alt="">
            </a>
        </div>
    </nav>
</div>

@include('layouts/productapprovemodal')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script src="{{asset('js/admin/adminheader.js')}}"></script>
