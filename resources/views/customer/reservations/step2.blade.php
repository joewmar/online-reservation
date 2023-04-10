@include('partials.header')
<div class="navbar bg-base-100">
  <a class="btn btn-ghost normal-case text-xl" href="/">Back Home</a>

</div>
<section style="background-image: url({{ asset('./images/main-hero3.jpg')}});">
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 card bg-base-200">
    <x-steps :$steps />
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5 mt-10">
      <div class="lg:col-span-2 lg:py-12">
        <h1 class="max-w-xl font-bold uppercase text-3xl">
          Fill the information
        </h1>

        <div class="mt-8">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aspernatur!
        </div>
      </div>

      <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
        <form action="/reservation/step3" class="space-y-4">
          <div>
            <div class="form-control w-full my-3">
              <label class="label">
                <span class="label-text">First Name</span>
                {{-- <span class="label-text-alt">Top Right label</span> --}}
              </label>
              <input type="text" placeholder="Your First Name" class="input input-bordered input-primary w-full focus:border-green-600" autofocus />
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
              <input type="text" placeholder="Your Last Name" class="input input-bordered input-primary w-full focus:border-green-600" />
              {{-- <label class="label">
                <span class="label-text-alt">Bottom Left label</span>
                <span class="label-text-alt">Bottom Right label</span>
              </label> --}}
            </div>
            <div class="form-control w-full my-3">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Address</span>
                </label>
                <textarea class="textarea textarea-primary" placeholder="Bio"></textarea>
                <label class="label">
                  <span class="label-text-alt">Lorem, ipsum.</span>
                </label>
              </div>
            </div>
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 my-3">

            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Country</span>
              </label>
              <select class="select select-bordered select-primary">
                <option disabled selected>Select</option>
                @foreach ($countriesSelect as $key => $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
              </select>
            </div>
            
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Nationality</span>
              </label>
              <select class="select select-bordered select-primary">
                <option disabled selected>Select</option>
                @foreach ($nationalitySelect as $key => $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
              </select>
            </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 my-3">
              <div class="form-control w-full">
                <label class="label">
                  <span class="label-text">Phone Number</span>
                </label>
                <input type="tel" placeholder="Your number" class="input input-bordered input-primary w-full"/>
                <label class="label">
                  <span class="label-text-alt">Bottom Left label</span>
=                </label>
              </div>

              <div class="form-control w-full">
                <label class="label">
                  <span class="label-text">Email</span>
                </label>
                <input type="email" placeholder="Type EMail" class="input input-bordered input-primary w-full max-w-xs" />
                <label class="label">
                  <span class="label-text-alt">Bottom Left label</span>
                </label>
              </div>
            </div>
            <br>
            <div class="mt-4 flex justify-end gap-5">
              <a href="/reservation/step1" class=" btn btn-ghost gap-2">
                <i class="fa-solid fa-arrow-left"></i>            
                Back
              </a>
              <button type="submit" class="btn btn-primary gap-2">
                Next
                <i class="fa-solid fa-arrow-right"></i>            
              </button>
            </div>
  
        </form>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')
