@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')


<div class="faqs_container">
    <div class="faqs_container_title">Faq's</div>
    <div class="faqs_container_inner">
        <div id="question_answer">
{{--            <div class="faqs_cont_question_answer_block">--}}
{{--                <label class="faqs_label_question">Question<a id="count">1</a></label>--}}
{{--                <textarea name="" class="textarea_question_block">  </textarea>--}}
{{--                <label class="faqs_label_answer">Answer<a id="count2">1</a></label>--}}
{{--                <textarea name="" class="textarea_answer_block">  </textarea>--}}
{{--            </div>--}}
            <div id="app">
            </div>
        </div>
        <button class="add_question"  onclick="createInputs(true,null)">
            <img src="{{asset('images/plus_color_blue.png')}}" alt="">
            <span class="add_question_title">Add a new question</span>
        </button>
        <div class="faqs_buttons_block">
            <a href="" id="faqs_button_save">
                <button class="faqs_button_save">save</button>
            </a>
            <a href="">
                <button class="faqs_button_cancel">Cancel</button>
            </a>
        </div>
    </div>
</div>

<script src="{{asset('js/admin/adminfaqs.js')}}"></script>
</body>
</html>
