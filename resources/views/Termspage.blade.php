@include('layouts/header')
<body>
@include('layouts/navigation')

<div class="Search_section1">
    <span class="Search_page_title">Terms & Policy</span>
</div>
<div class="TermsPolicy_section">
    <div class="Terms_Policy_container">
        <div class="Terms_Policy_inner">
{{--            <div class="Terms_Policy_Block_">--}}
{{--                <div class="Terms_Policy_Block">--}}
{{--                    <label class="faqs_label_question">Section<a id="count">1</a></label>--}}
{{--                    <textarea name="" class="textarea_question_block">  </textarea>--}}
{{--                    <label class="faqs_label_answer">Answer<a id="count2">1</a></label>--}}
{{--                    <textarea name="" class="textarea_answer_block">  </textarea>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
@include('layouts/footer')
<script src="{{asset('js/terms.js')}}"></script>
</body>
</html>
