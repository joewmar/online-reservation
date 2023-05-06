<section class="{{$systemBG}} text-neutral w-screen h-full ml-0 md:ml-56 md:mt-16">
    <div
      class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
    >
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-bold sm:text-4xl">Home</h2>
  
      </div>
  
      {{-- Summary System --}}
      <div class="my-8 grid grid-flow-row md:grid-flow-col gap-2">
        <article class="flex items-end justify-between rounded-lg border border-gray-100 bg-white p-6">
          <div class="flex items-center gap-4">
            <span class="hidden rounded-full bg-gray-100 p-2 text-gray-600 sm:block">
              <i class="fa-solid fa-users"></i>
            </span>

            <div>
              <p class="text-sm text-gray-500">Total Customer have accounts</p>

              <p class="text-2xl font-medium text-gray-900">$240.94</p>
            </div>
          </div>
        </article>

        <article class="flex items-end justify-between rounded-lg border border-gray-100 bg-white p-6">
          <div class="flex items-center gap-4">
            <span class="hidden rounded-full bg-gray-100 p-2 text-gray-600 sm:block">
              <i class="fa-solid fa-users"></i>
            </span>

            <div>
              <p class="text-sm text-gray-500">Total Customer have no accounts</p>

              <p class="text-2xl font-medium text-gray-900">$240.94</p>
            </div>
          </div>
        </article>

        <article class="flex items-end justify-between rounded-lg border border-gray-100 bg-white p-6">
          <div class="flex items-center gap-4">
            <span class="hidden rounded-full bg-gray-100 p-2 text-gray-600 sm:block">
              <i class="fa-solid fa-heart fa-bounce"></i>
            </span>

            <div>
              <p class="text-sm text-gray-500">Total Feedback Rating</p>

              <p class="text-2xl font-medium text-gray-900">
                <div class="rating">
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400 cursor-default"  disabled/>
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400 cursor-default" disabled/>
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400 cursor-default"  disabled/>
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400 cursor-default"  disabled/>
                  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400 cursor-default"  disabled/>
                </div>
              </p>
              <span class="text-1xl font-semibold text-gray-900">Very Satified</span>

            </div>
          </div>
        </article>

      </div>       
      <div class="my-8 grid grid-flow-row md:grid-flow-col gap-2">
        <article class="flex items-start justify-center rounded-lg border border-gray-100 bg-white py-6">
          <div class="flex items-center justify-center gap-4">
            <div class="">
              <h1 class="text-xl mb-5">Country Customer Chart</h1>
              <canvas id="pie-chart"></canvas>
            </div>
          </div>
        </article>
        <article class="flex items-start justify-center rounded-lg border border-gray-100 bg-white py-6">
          <div class="flex items-center justify-center gap-4">
            <div class="">
              <h1 class="text-xl mb-5">Sales Report</h1>
              <canvas class="w-96 " id="bar-chart-grouped"></canvas>
            </div>
          </div>
        </article>

      </div>    
    </div>    
</section>

