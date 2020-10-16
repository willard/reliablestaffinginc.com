<?php
/* Template Name: Services */

get_header();
?>
<main id="site-content" role="main">
    <section class="text-gray-500 body-font bg-gray-900">
        <div class="overflow-hidden h-screen/2">
            <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Services</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base"><?php the_content(); ?></p>
            </div>
            <div class="flex flex-wrap -m-4">

                <?php $services = rs_services(); ?>
                <?php foreach ($services as $service) : ?>
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
            <!-- <a href="/services" class="block w-40 text-center mx-auto mt-16 text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg">Learn More</a> -->
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
