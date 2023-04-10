@include('partials.header')
<div class="navbar bg-base-100">
  <a class="btn btn-ghost normal-case text-xl" href="/">Back Home</a>
</div>
<section style="background-image: url({{ asset('./images/main-hero3.jpg')}});">
<div>
  <div class="mx-auto max-w-screen-xl card px-4 py-8 sm:px-6 sm:py-12 lg:px-8 bg-base-200 pt-4">
    <x-steps :$steps />
      <header>
        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
          Choose Accommodations
        </h2>

        {{-- <p class="mt-4 max-w-lg text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
          praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
          natus?
        </p> --}}
      </header>

      <div class="mt-8 block lg:hidden">
        <button
          class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
        >
          <span class="text-sm font-medium"> Filters </span>
            <i class="fa-solid fa-greater-than"></i>
          </button>
      </div>
      <form action="/reservation/step2">
      {{-- Side bar form --}}
      <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
        <div class="hidden bg-base-100 lg:bg-transparent space-y-4 lg:block gap-5">
            <div class="form-control">
              <label for="checkIn" class="label">
                <span class="label-text">Check in</span>
              </label>
              <label for="checkIn" class="">
                <input class="input input-primary w-full" type="date" name="checkIn" id="checkIn">
              </label>
            </div>
            
            <div class="form-control">
              <label class="label">
                <span class="label-text">Check out</span>
              </label>
              <label for="checkOut" class="">
                <input class="input input-primary w-full" type="date" name="checkOut" id="checkOut">
              </label>
            </div>

            {{-- Accommodations Type --}}
            <div class="form-control">
              <label class="label">
                <span class="label-text">Acccommodation Type</span>
              </label>
              <select class="select select-primary w-full max-w-xs">
                <option disabled selected>Select Type</option>
                <option>Day Tour</option>
                <option>Overnight</option>
                <option>Custom Type</option>
              </select>
            </div>

            {{-- Payment Method --}}
            <div class="form-control">
              <label class="label">
                <span class="label-text">Payment Method</span>
              </label>
              <select class="select select-primary w-full max-w-xs">
                <option disabled selected>Select</option>
                <option>Walk in</option>
                <option>Paypal: Online Payment</option>
              </select>
            </div>
            <div class="hidden lg:flex justify-end gap-5">
              <button type="submit" class="btn btn-primary gap-2">
                Next
                <i class="fa-solid fa-arrow-right"></i>            
              </button>
            </div>
        </div>  
        {{-- --------------------------------------------------------------------- --}}
        {{-- Packages Button --}}
        <div class="lg:col-span-3 h-full">
          <h1 class="text-2xl my-5">Packages</h1>
          <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @include('customer.reservations.step1.packages');
          </ul>
          <div class="divider"></div> 
          {{-- Room Accommodation --}}
          <h1 class="text-2xl mt-5">Room Accommodations</h1>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 my-5 w-full lg:w-4/5">
              <div class="form-control ">
                <label class="label">
                  <span class="label-text">Choose Room Type</span>
                </label>
                <select class="select select-primary w-full">
                  <option disabled selected>Select Room Type</option>
                  <option>Solo</option>
                  <option>Double</option>
                  <option>Triple</option>
                  <option>Quad</option>
                </select>
              </div>

              <div class="form-control w-full">
                <label class="label">
                  <span class="label-text">Number of Guest</span>
                </label>
                <input type="number" class="input input-bordered input-primary w-full" value="1"/>
                <label class="label">
                  <span class="label-text-alt">Bottom Left label</span>
                </label>
              </div>
            </div>

          <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @include('customer.reservations.step1.rooms');
          </ul>

        </div>
        <div class="flex lg:hidden justify-end gap-5">
          <button type="submit" class="btn btn-primary gap-2">
            Next
            <i class="fa-solid fa-arrow-right"></i>            
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</section> 

@include('partials.footer')
