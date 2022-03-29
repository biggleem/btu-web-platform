<div class="sidebar">
    <div class="sidebar_container1">
        <a href="{{route('admindashboard')}}">
            <img src="{{asset('images')}}/logo.png" alt="" class="logo">
        </a>
        <div class="sidebar_menu_block">
            <a class="sidebar_menu_block_item" id="sidebar_" href="{{route('admindashboard')}}">DashBoard</a>
            <hr class="line_admin_dashboard">
            <a href="{{route('adminallproducts')}}" id="sidebar_allproducts" class="sidebar_menu_block_item">All Products</a>
            <hr class="line_admin_dashboard">
            <a href="{{route('adminmyproducts')}}" id="sidebar_myproducts" class="sidebar_menu_block_item">My Products</a>
            <hr class="line_admin_dashboard">
            <a href="{{route('adminnotifications')}}" id="sidebar_notifications" class="sidebar_menu_block_item">Notifications</a>
            <hr class="line_admin_dashboard">
            <a class="accordion_admin_dashboard sidebar_menu_block_item">Categories</a>
            <div class="panel_admin_dashboard">
                <div class="panel_admin_dashboard_inner">
                    <a href="{{route('adminhomegoods')}}" class="panel_admin_dashboard_item">Homegoods</a>
                    <a href="{{route('adminfaceandhair')}}" class="panel_admin_dashboard_item">Face and Hair</a>
                    <a href="{{route('adminedibles')}}" class="panel_admin_dashboard_item">Edibles</a>
                    <a href="{{route('adminamazonhurries')}}" class="panel_admin_dashboard_item">Amazon hurries</a>
                    <a href="{{route('adminwydtyn')}}" class="panel_admin_dashboard_item">WYDTYN</a>
                </div>
            </div>
            <hr class="line_admin_dashboard">
        </div>
    </div>
    <div class="sidebar_container2">
        <div class="sidebar_container2">
            <div class="sidebar_menu_block_2">
                <a href="{{route('adminprofile')}}" id="sidebar_myprofile" class="sidebar_menu_block2_item">My Profile</a>
                <a href="{{route('adminfaqs')}}" id="sidebar_faqs" class="sidebar_menu_block2_item">Faq's</a>
                <a href="{{route('adminterms')}}" id="sidebar_terms" class="sidebar_menu_block2_item">Terms and policy</a>
            </div>
        </div>
    </div>
</div>

<script>
    let loc = '';
    let locl = location.href;
    for(let i = locl.length-1 ; i >= 0; i--){
        if(locl[i] == '/'){
            loc = loc.split("").reverse().join("");
            break;
        }
        else{
            loc+=locl[i];
        }
    }
    console.log(loc);
    switch(loc){
        case 'allproducts':
            document.getElementById('sidebar_allproducts').classList.add('admin_page_active');
            break;
        case 'admin':
            document.getElementById('sidebar_').classList.add('admin_page_active');
            break;
        case 'myproducts':
            document.getElementById('sidebar_myproducts').classList.add('admin_page_active');
            break;
        case 'notifications':
            document.getElementById('sidebar_notifications').classList.add('admin_page_active');
            break;
        case 'profile':
            document.getElementById('sidebar_myprofile').classList.add('admin_page_active');
            break;
        case 'faqs':
            document.getElementById('sidebar_faqs').classList.add('admin_page_active');
            break;
        case 'terms':
            document.getElementById('sidebar_terms').classList.add('admin_page_active');
            break;

    }
</script>
