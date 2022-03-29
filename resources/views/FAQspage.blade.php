@include('layouts/header')
<body>
@include('layouts/navigation')
<div class="Search_section1">
    <span class="Search_page_title">FAQ’s</span>
</div>
<div class="Faqs_section">
    <div class="Faqs_container">
        <div class="Faqs_inner">
{{--            <div class="faqs_block_cont">--}}
{{--                <div class="Faqs_Block">--}}
{{--                    <label class="faqs_label_question">Question<a id="count">1</a></label>--}}
{{--                    <textarea name="" class="textarea_question_block">  </textarea>--}}
{{--                    <label class="faqs_label_answer">Answer<a id="count2">1</a></label>--}}
{{--                    <textarea name="" class="textarea_answer_block">  </textarea>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

@include('layouts/footer')
    <script src="{{asset('js/faqs.js')}}"></script>
</body>
</html>
