<?php get_header(); ?>
<main id="site-content" role="main">
  <section id="hero" class="text-gray-500 bg-gray-900 body-font h-screen-7 my-auto flex justify-center bg-fixed bg-no-repeat bg-center bg-cover" style="background-image:url(<?php the_field('hero_background'); ?>)">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col relative z-10">
      <div class="text-center lg:w-2/3 w-full bg-black rounded bg-opacity-75 p-10 text-white">
        <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium">
          <?php the_field('hero_title'); ?>
        </h1>
        <p class="leading-relaxed mb-8 text-xl">
          <?php the_field('hero_description'); ?>
        </p>
        <div class="flex justify-center">
          <a href="/contact" class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-500 rounded text-lg">Contact Us</a>
          <a href="/jobs" class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Jobs</a>
        </div>
      </div>
    </div>
  </section>
 
 <!-- services -->
  <section class="text-gray-500 body-font bg-gray-900">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Services</h1>
        <p class="lg:w-1/2 w-full leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
      </div>
      <div class="flex flex-wrap -m-4">
      
      <?php $services = rs_services(); ?>
      <?php foreach( $services as $service ): ?>
      <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class="border border-gray-800 p-6 rounded-lg">
            <h2 class="text-lg text-white font-medium title-font mb-2">
              <a href="<?php echo $service['url']; ?>"><?php echo $service['title']; ?></a>
            </h2>
            <p class="leading-relaxed text-base">
              <?php echo $service['excerpt']; ?>
            </p>
            <a href="<?php echo $service['url']; ?>" class="block text-sm my-2 text-right text-orange-500 hover:text-orange-600">Read More</a>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
      <a href="/services" class="block w-48 text-center mx-auto mt-16 text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg">Learn More</a>
    </div>
  </section>

  <!-- image -->
  <section class="bg-fixed bg-no-repeat bg-center bg-cover h-screen/2" style="background-image:url(<?php the_field('image_1'); ?>)">

  </section>

  <!-- testimonials -->
  <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
      <div class="flex flex-wrap -m-4">
      <?php $items = rs_testimonials(); ?>
        <?php foreach($items as $item): ?>
        <div class="p-4 md:w-1/2 w-full">
          <div class="h-full bg-gray-200 p-8 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="leading-relaxed mb-6"><?php echo $item['content']; ?></p>
            <a class="inline-flex items-center">
              <span class="flex-grow flex flex-col">
                <span class="title-font font-medium text-gray-900">
                  <?php echo $item['name']; ?>
                </span>
                <span class="text-gray-500 text-sm">
                  <?php echo $item['position']; ?>
                </span>
              </span>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section class="text-gray-500 bg-gray-900 body-font relative">
    <div class="absolute inset-0 bg-gray-900">
      <iframe title="map" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.16);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-gray-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <h2 class="text-white text-lg mb-1 font-medium title-font">Contact Us</h2>
        <p class="leading-relaxed mb-5 text-gray-500">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <?php 
        echo do_shortcode('[contact-form-7 id="85" title="Contact Form"]');
        ?>
        <p class="text-xs text-gray-600 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
