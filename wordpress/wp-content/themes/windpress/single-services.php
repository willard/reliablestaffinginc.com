<?php
get_header();
?>
<main id="site-content" role="main">
    <section class="text-gray-700 body-font">
        <div class="py-10 mx-auto flex flex-col">
            <div class="lg:w-full mx-auto">
                <div class="overflow-hidden h-screen/2">
                    <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
                <div class="flex flex-col sm:flex-row mt-10 px-5 container mx-auto">

                    <div class="sm:w-2/3 sm:pr-8 sm:py-8 sm:mt-0 text-center sm:text-left">
                        <h3 class="text-xl mb-3 font-bold"><?php the_title(); ?></h3>
                        <div class="leading-relaxed text-lg mb-4">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <div class="sm:w-1/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t bg-white flex flex-col md:ml-auto w-full mt-4 pt-4">
                        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact Us</h2>
                        <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                        <?php 
                            echo do_shortcode('[contact-form-7 id="85" title="Contact Form"]');
                        ?>
                        <!-- <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Name" type="text">
                        <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
                        <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
                        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button> -->
                        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="text-gray-500 body-font bg-gray-900">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Other Services</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
            </div>
            <div class="flex flex-wrap -m-4 justify-center">

                <?php $services = rs_services(get_the_ID()); ?>
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
            <!-- <button class="flex mx-auto mt-16 text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg">Learn More</button> -->
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
