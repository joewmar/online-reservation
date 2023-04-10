@include('partials.header')

<section class="bg-white">
  <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
    <aside
      class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6"
    >
      <img
        alt="Pattern"
        src="{{ asset('images/main-hero6.jpg')}}"
        class="absolute inset-0 h-full w-full object-cover"
      />
    </aside>

    <main
      aria-label="Main"
      class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:py-12 lg:px-16 xl:col-span-6"
    >
      <div class="max-w-xl lg:max-w-3xl">
        <a class="block text-primary" href="/">
          <span class="sr-only">Home</span>
          <div class="block md:hidden">
            LOGO
          </div>
        </a>
        <h1
          class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"
        >
          Login
        </h1>

        <p class="mt-4 leading-relaxed text-gray-500">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam
          dolorum aliquam, quibusdam aperiam voluptatum.
        </p>

        <form action="#" class="mt-8 grid grid-cols-6 gap-6">
          <div class="col-span-6">
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Email</span>
                <span class="label-text-alt">Top Right label</span>
              </label>
              <input type="text" class="input input-primary input-sm md:input-md w-full" />
              <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                <span class="label-text-alt">Bottom Right label</span>
              </label>
            </div>
          </div>

          <div class="col-span-6 sm:col-span-6">
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Password</span>
                <span class="label-text-alt">Top Right label</span>
              </label>
              <input type="text" class="input input-primary input-sm md:input-md w-full" />
              <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                <span class="label-text-alt">Bottom Right label</span>
              </label>
            </div>
          </div>

          <div class="flex">
              <label for="MarketingAccept" class="flex gap-4 w-full">
                <input
                  type="checkbox"
                  id="MarketingAccept"
                  name="marketing_accept"
                  class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm"
                />

                <span class="text-sm text-neutral">
                  Remember me
                </span>
            </label>
            <a class="link link-primary w-full">Forgot password</a>
          </div>

          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button
              class="inline-block shrink-0 rounded-md border border-primary bg-primary px-12 py-3 w-full md:w-56 text-sm font-medium text-white transition hover:bg-transparent hover:text-primary focus:outline-none focus:ring active:text-blue-500"
            >
              LOGIN
            </button>

            <p class="mt-4 text-sm text-gray-500 sm:mt-0">
              Already have an account?
              <a href="/register" class="text-gray-700 underline">Sign up</a>.
            </p>
          </div>

        </form>
        <div class="divider">OR</div>
        <div class="grid h-20 card rounded-box place-items-center gap-5 my-5">
          <button class="inline-block w-full shrink-0 rounded-md border border-red-500 bg-red-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-red-500 focus:outline-none focus:ring active:text-red-700">
            Connect with Google
          </button>
          <button class="inline-block w-full shrink-0 rounded-md border border-blue-500 bg-blue-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-500 focus:outline-none focus:ring active:text-blue-700">
            Connect with Facebook
          </button>

        </div>
      </div>
    </main>
  </div>
</section>

@include('partials.footer')
