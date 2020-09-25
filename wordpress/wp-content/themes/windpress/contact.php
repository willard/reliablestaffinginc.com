<?php
/* Template Name: Contact Us */

get_header();
?>
<main id="site-content" role="main">
  <!-- contact -->
  <section class="text-gray-500 bg-gray-900 body-font relative h-screen-7">
    <div class="absolute inset-0 bg-gray-900 h-full">
      <div class="w-full h-screen-7 bg-cover my-auto" style="background-image:url(https://images.unsplash.com/photo-1486325212027-8081e485255e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
      </div>
    </div>
    <div class="container px-5 py-24 mx-auto flex my-auto justify-center">
      <div class="lg:w-1/3 md:w-1/2 bg-gray-900 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <h2 class="text-white text-lg mb-1 font-medium title-font">Contact Us</h2>
        <p class="leading-relaxed mb-5 text-gray-500">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <input class="bg-gray-800 text-white rounded border border-gray-700 focus:outline-none focus:border-orange-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
        <textarea class="bg-gray-800 text-white rounded border border-gray-700 focus:outline-none h-32 focus:border-orange-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
        <button class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-600 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();