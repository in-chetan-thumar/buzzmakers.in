  <!-- faqs -->
  <section class="faqs-secondary mt-0">
    <div class="container">
      <!-- <div class="text-center text-white mb-5">
          <h2 class="hindi2"><span>#</span>गहराइयाँ</h2>
          <h1 class="text-white">FAQ's</h1>
        </div>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                Accordion Item #1
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                This is the first item's accordion body. It is shown by default,
                until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS
                transitions. You can modify any of this with custom CSS or
                overriding our default variables. It's also worth noting that
                just about any HTML can go within the .accordion-body, though
                the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Accordion Item #2
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                This is the first item's accordion body. It is shown by default,
                until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS
                transitions. You can modify any of this with custom CSS or
                overriding our default variables. It's also worth noting that
                just about any HTML can go within the .accordion-body, though
                the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Accordion Item #3
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                This is the first item's accordion body. It is shown by default,
                until the collapse plugin adds the appropriate classes that we
                use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS
                transitions. You can modify any of this with custom CSS or
                overriding our default variables. It's also worth noting that
                just about any HTML can go within the .accordion-body, though
                the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
        <div>
          <a href="#" class="text-white"
            >REAL ALL FAQs<i class="bi bi-arrow-right ms-3"></i
          ></a>
        </div> -->

      <div class="text-center text-white mb-3 fw-bold faq-content-blog reveal">
          <h2 class=" text-white">Now that you have seen some of our work in action, here is a call to action to kickstart your journey with us.</h2>

          <h2 class=" text-white">Let’s talk!</h2>

          {{--        <h2>Now that you've scrolled to the bottom of the page.</h2>--}}
{{--        <h2>We believe that we've got you excited.</h2>--}}
{{--        <h2>Let's get your brand buzzing?</h2>--}}
        <a href="{{route('frontend.contact')}}" class="btn btn-buzz mt-2" style="padding: 7px 20px !important" target="_blank">Contact Us</a>
      </div>
      <img src="{{asset('assets/frontend/images/announcement.webp')}}" class="oneside-speaker-img-pc" alt="announcement">
      <img src={{asset('assets/frontend/images/speakerfaqs.webp')}} class="oneside-speaker-img-mobile" alt="speakerfaqs">
    </div>
  </section>
  <!-- faqs end -->
