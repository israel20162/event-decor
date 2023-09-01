  <section class="bg-gray-50 py-20">
      <div class="container mx-auto px-4 md:px-0">

          <!-- Heading and Subheading -->
          <div class="text-center mb-12">
              <h2 class="text-4xl font-bold mb-4">About Us</h2>
              <p class="text-xl text-gray-600">Crafting Memorable Event Experiences Since <span class="text-xl text-black font-extrabold"> {{$settings->company_established_year}}</span></p>
          </div>

          <!-- Content Grid: Image and Text -->
          <div class="grid md:grid-cols-2 gap-12 items-center">

              <!-- Image: Ideally a team or portfolio image -->
              <div class="order-2 md:order-1 text-center">
                  <img src={{ asset('about-us.jpg') }} alt="Our team working on an event"
                      class="w-full rounded-lg shadow-xl">
                  <p class="capitalize text-center w-full text-lg font-semibold py-4">our team working on an event</p>
              </div>

              <!-- Text Content -->
              <div class="order-1 md:order-2 text-gray-700 pb-16">
                  <p class="mb-6">
                      At <span class="text-lg capitalize text-black font-extrabold"> {{$settings->company_name}}</span>, we believe every event tells a story. Whether it's a dream wedding, a
                      corporate gala, or a milestone birthday, our team is passionate about making every detail
                      unforgettable.
                  </p>
                  <p class="mb-6">
                      With over a decade in the industry, our expertise ranges from intimate gatherings to grand
                      celebrations. Our commitment to quality and attention to detail ensures that each event not only
                      meets but exceeds our clients' expectations.
                  </p>
                  <p>
                      Based in <span class="text-lg capitalize text-black font-extrabold">{{$settings->company_city}}</span>, we're proud to have been a part of over 50 events, each unique and
                      special in its own right. Join us in making your next event truly spectacular.
                  </p>
              </div>

          </div>

      </div>
  </section>
