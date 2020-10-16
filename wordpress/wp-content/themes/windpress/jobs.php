<?php
/* Template Name: Jobs */

get_header();
$jobs = rs_jobs();
?>
<main id="site-content" role="main">
  <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" class="mx-auto text-center h-screen/2 bg-fixed bg-no-repeat bg-cover bg-bottom my-auto flex justify-center">
  </div>
  <section class="flex flex-col container mx-auto my-24 px-32">
    <h1 class="text-xl font-bold mb-3">Available Jobs</h1>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Title
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                  Location
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach ($jobs as $job) : ?>
                <tr>
                  <td class="px-6 py-4 whitespace-no-wrap">
                    <div class="text-sm leading-5 text-gray-900 uppercase font-bold"><a href="<?php echo $job['url']; ?>"><?php echo $job['title']; ?></a></div>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Active
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    <?php echo $job['location']; ?>
                  </td>
                  <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <a href="<?php echo $job['url']; ?>" class="text-orange-500 hover:text-orange-600">Apply Now</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="text-gray-500 bg-gray-900 body-font relative text-center h-64 flex items-center justify-center flex-col">
    <p>lipsum here</p>
  </section>
</main>
<?php
get_footer();
