@include('partials.header')

<section class="bg-white">
  <div class="lg:grid h-screen lg:min-h-screen lg:grid-cols-12">
    <aside
      class="relative hidden lg:block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6"
    >
    <a href="/" title="Home">
      <img alt="hero" src="{{asset('images/main-hero6.jpg')}}" class="absolute inset-0 h-full w-full object-cover opacity-80"/>
    </a>
    </aside>

    <main
      aria-label="Main"
      class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:py-12 lg:px-16 xl:col-span-6"
    >
      <div class="max-w-xl lg:max-w-3xl">
        <a class="block text-primary" href="/">
          <span class="sr-only">Home</span>
          <div class="block text-center lg:hidden">
            LOGO
          </div>
        </a>
        <h1
          class="mt-10 lg:mt-6 text-center lg:text-left text-2xl font-bold text-gray-900 sm:text-3xl lg:text-4xl"
        >
          Welcome to System
        </h1>

        <p class="text-center lg:text-left mt-4 leading-relaxed text-gray-500">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam
          dolorum aliquam, quibusdam aperiam voluptatum.
        </p>

        <form action="#" class="mt-8 grid grid-row gap-6">
          <div class="col-span-6">
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Email</span>
                {{-- <span class="label-text-alt">Top Right label</span> --}}
              </label>
              <input type="text" class="input input-primary input-md w-full" />
              <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                {{-- <span class="label-text-alt">Bottom Right label</span> --}}
              </label>
            </div>
          </div>

          <div class="col-span-6 lg:col-span-6">
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Password</span>
                {{-- <span class="label-text-alt">Top Right label</span> --}}
              </label>
              <input type="text" class="input input-primary input-md w-full" />
              <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
              </label>
            </div>
          </div>



          <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
            <button
              class="inline-block shrink-0 rounded-lg border border-primary bg-primary px-12 py-3 w-full text-sm font-medium text-white transition hover:bg-transparent hover:text-primary focus:outline-none focus:ring active:bg-primary"
            >
              LOGIN
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</section>

@include('partials.footer')
