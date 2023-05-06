<section class="{{$systemBG}} text-neutral w-screen h-full ml-0 md:ml-56 md:mt-16">
    <div
      class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
    >
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-bold sm:text-4xl">Rooms</h2>


      </div>
      <fieldset class="w-full space-y-1 text-neutral">
        <label for="Search" class="hidden">Search Room</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-2 ">
            <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
              <i class="fa-solid fa-magnifying-glass text-neutral"></i>
            </button>
          </span>
          <input type="search" name="Search" placeholder="Search Room..." class="w-52 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none focus:border-violet-400 ">
        </div>
      </fieldset>
      <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        <a
          class="block rounded-xl border border-neutral-content p-8 shadow-md transition hover:border-zinc-500 hover:shadow-zinc-700"
        >
          <h2 class="mt-4 text-xl font-bold text-neutral">Room No. 1</h2>
  
          <p class="mt-1 text-sm text-neutral-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
            possimus adipisci distinctio alias voluptatum blanditiis laudantium.
          </p>
        </a>
  
        <label
          class="block rounded-xl border border-neutral-content p-8 shadow-md transition hover:border-zinc-500 hover:shadow-zinc-700"
          for="my-modal-6"
        >
          <h2 class="mt-4 text-xl font-bold text-neutral">Room No. 2</h2>

          <p class="mt-1 text-sm text-neutral-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
            possimus adipisci distinctio alias voluptatum blanditiis laudantium.
          </p>
        </label>

      <a
        class="block rounded-xl border border-neutral-content p-8 shadow-md transition hover:border-zinc-500 hover:shadow-zinc-700"
        href="/services/digital-campaigns"
      >
        <h2 class="mt-4 text-xl font-bold text-neutral">Room No. 3</h2>

        <p class="mt-1 text-sm text-neutral-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
        </p>
      </a>

      <a
        class="block rounded-xl border border-neutral-content p-8 shadow-md transition hover:border-zinc-500 hover:shadow-zinc-700"
        href="/services/digital-campaigns"
      >
        <h2 class="mt-4 text-xl font-bold text-neutral">Room No. 4</h2>

        <p class="mt-1 text-sm text-neutral-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
        </p>
      </a>

      <a
        class="block rounded-xl border border-neutral-content p-8 shadow-md transition hover:border-zinc-500 hover:shadow-zinc-700"
        href="/services/digital-campaigns"
      >
        <h2 class="mt-4 text-xl font-bold text-neutral">Room No. 5</h2>

        <p class="mt-1 text-sm text-neutral-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
        </p>
      </a>

      <a
        class="block rounded-xl border border-neutral-content p-8 shadow-md transition hover:border-zinc-500 hover:shadow-zinc-700"
        href="/services/digital-campaigns"
      >
        <h2 class="mt-4 text-xl font-bold text-neutral">Room No. 6</h2>

        <p class="mt-1 text-sm text-neutral-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
        </p>
      </a>
      </div>
  
      {{-- <div class="mt-12 text-center">
        <a
          href="#"
          class="inline-block rounded bg-pink-600 px-12 py-3 text-sm font-medium text-neutral transition hover:bg-pink-700 focus:outline-none focus:ring focus:ring-yellow-400"
        >
          Get Started Today
        </a>
      </div> --}}
    </div>    
</section>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-6" class="modal-toggle" />
<div class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Room no. 2</h3>
    <p class="py-4">
      Name: Juan Dela Cruz<br>
      Age: 25<br>
      Addreess: Eh di wow st Capas, Tarlac.<br>

    </p>
    <div class="modal-action">
      <label for="my-modal-6" class="btn btn-primary">Close</label>
    </div>
  </div>
</div>
