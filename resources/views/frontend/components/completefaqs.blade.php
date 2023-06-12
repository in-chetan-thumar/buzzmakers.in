    <!-- faqs -->
    <section class="faqs">
        <div class="text-center text-white mb-5 reveal">
            <h2 class="hindi2 text-white"><span>#</span>गहराइयाँ</h2>
            <h1 class="text-white">FAQ's</h1>
        </div>
        <div class="container reveal">

            <div class="accordion" id="accordionExample">

                @php
                    $collapsed = true;
                @endphp

                @foreach ($tableData as $data)
                    <div class="accordion-item" style="display: none">
                        <h2 class="accordion-header" id="heading{{ $data->id }}">
                            <button class="accordion-button {{ $collapsed ? '' : 'collapsed' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $data->id }}"
                                aria-expanded="{{ $collapsed ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $data->id }}">
                                {{ $data->title }}
                            </button>
                        </h2>
                        <div id="collapse{{ $data->id }}"
                            class="accordion-collapse collapse {{ $collapsed ? 'show' : '' }}"
                            aria-labelledby="heading{{ $data->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!!  $data->description  !!}
                            </div>
                        </div>
                    </div>

                    @php
                        $collapsed = false;
                    @endphp
                @endforeach

            </div>
            <div>
                <a href="#" class="text-white" id="loadMore">Load More FAQs<i
                        class="bi bi-arrow-right ms-3"></i></a>
            </div>

            <div>
                <a href="#" class="text-white" style="display: none" id="lessfaqs">Less FAQs<i
                        class="bi bi-arrow-right ms-3"></i></a>
            </div>
            <br><br><br><br><br>

            <div class="text-center mb-3 fw-bold faq-content  text-white">
                <h2 class=" text-white">Now that you’ve scrolled to the bottom of the page,<br> we’d love to translate this conversion into a conversation.</h2>

                <h2 class=" text-white">Let’s talk!</h2>
{{--                <h2>Now that you've scrolled to the bottom of the page.</h2>--}}
{{--                <h2>We believe that we've got you excited.</h2>--}}
{{--                <h2>Let's get your brand buzzing?</h2>--}}
                <a href="{{ route('frontend.contact') }}" class="btn btn-buzz mt-2"
                    style="padding: 7px 20px !important" target="_blank">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- faqs end -->
