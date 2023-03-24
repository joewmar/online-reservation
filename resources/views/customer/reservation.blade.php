@include('partials.header')

@php
    $arrCountries = array(
  
    );
    $arrNationality
@endphp
<x-steps/>

<section class="bg-gray-100">
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5 mt-10">
      <div class="lg:col-span-2 lg:py-12">
        <h1 class="max-w-xl font-bold uppercase text-3xl">
          Reservation Form
        </h1>

        <div class="mt-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aspernatur!
        </div>
      </div>

      <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
        <form action="" class="space-y-4">
          <div>
            <div class="form-control w-full my-3">
              <label class="label">
                <span class="label-text">First Name</span>
                {{-- <span class="label-text-alt">Top Right label</span> --}}
              </label>
              <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full focus:border-green-600" autofocus />
              {{-- <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                <span class="label-text-alt">Bottom Right label</span>
              </label> --}}
            </div>
            <div class="form-control w-full my-3">
              <label class="label">
                <span class="label-text">Last Name</span>
                {{-- <span class="label-text-alt">Top Right label</span> --}}
              </label>
              <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full focus:border-green-600" />
              {{-- <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                <span class="label-text-alt">Bottom Right label</span>
              </label> --}}
            </div>

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 my-3">

            <div class="form-control w-full max-w-xs">
              <label class="label">
                <span class="label-text">Sex</span>
              </label>
              <select class="select select-bordered select-primary">
                <option disabled selected>Select</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Email</span>
                {{-- <span class="label-text-alt">Top Right label</span> --}}
              </label>
              <input type="email" placeholder="Type here" class="input input-bordered input-primary w-full focus:border-green-600" />
              {{-- <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                <span class="label-text-alt">Bottom Right label</span>
              </label> --}}
            </div>

            <br>
          <div class="mt-4">
            <button
              type="submit"
              class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
            >
              Send Enquiry
            </button> 
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')
@include('partials.footer')