<?php
get_header();
?>

<main id="site-content" role="main">
	<section class="text-gray-500 bg-gray-900 body-font relative">
		<div class="container px-5 py-24 mx-auto flex sm:flex-no-wrap flex-wrap">
			<div class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 px-10">
				<h1 class="font-bold text-xl uppercase"><?php the_title(); ?></h1>
				<small class="text-sm text-gray-500"><?php echo get_field("location") ?></small>
				<div class="my-2">
					<?php echo get_field("description") ?>
				</div>
			</div>
			<div class="lg:w-1/3 md:w-1/2  md:ml-auto w-full">
			<h3 class="font-bold text-lg mb-3">Application Form</h3>
			<?php gravity_form(3, false, false, false, array('job' => get_the_title() ), false); ?>
				<!-- <form x-data="submitApplicationForm()" @submit="event.preventDefault();" class="flex flex-col">
					<input x-model="formData.name" class="bg-gray-800 rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base text-white px-4 py-2 mb-4" placeholder="Name" type="text">
					<input x-model="formData.email" class="bg-gray-800 rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base text-white px-4 py-2 mb-4" placeholder="Email" type="email">
					<textarea x-model="formData.message" class="bg-gray-800 rounded border border-gray-700 focus:outline-none h-32 focus:border-indigo-500 text-base text-white px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
					<div class="overflow-hidden relative mb-4 border border-gray-700 w-full rounded">
						<button class="bg-indigo hover:bg-indigo-dark text-white font-bold py-2 px-4 w-full inline-flex items-center" x-on:click="$refs.resume.click()">
							<svg fill="#FFF" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0h24v24H0z" fill="none" />
								<path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
							</svg>
							<span class="ml-2 text-sm font-medium">Resume ( max 2mb )</span>
						</button>
						<input x-model="formData.resume" x-ref="resume" @change="resume_url = $refs.resume.files[0]" class="cursor-pointer absolute block opacity-0 pin-r pin-t" type="file" name="resume">
					</div>
					<button @click="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
				</form> -->
			</div>
		</div>
	</section>

</main><!-- #site-content -->
<?php
get_footer();
