@include('layouts/header')
<body>
<div class="wait_page">
    <div class="wait_page_container">
        <img src="{{asset('images')}}/logo.png" alt="" class="wait_page_logo">
        <span class="wait_page_title1">Now taking you to</span>
        <img src="{{asset('images')}}/image%205.png" alt="" class="wait_page_logo2">
        <img src="{{asset('images')}}/Spinner.gif" alt="ads">
        <a href="" class="wait_page_title2">Taking too long? Click here</a>
    </div>
</div>
<script>
    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            // vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    let link = null;
    if(getUrlVars()['link'] == null){
        location.href = '/';
    }
    else{
        link = getUrlVars()['link'];
    }

    document.getElementsByClassName('wait_page_title2')[0].href = link;

    window.setTimeout(function(){
        location.href = link;
    }, 5000);
</script>
</body>
</html>
