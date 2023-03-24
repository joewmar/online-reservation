@include('partials.header')
<div class="header finisher-header" style="width: 100%; height: 100%;">
  <div class=" bg-base-200 md:w-5/12 sm:w-full h-full md:h-auto rounded-2xl shadow-lg mx-auto place-items-center">
    <div class="mx-auto px-4 py-20 my-20 sm:px-6 lg:px-8 relative">
      <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Sign up<h1>
  
    </div>

    <form action="" class="mx-auto mt-8 mb-0 max-w-md space-y-4 ">
      <div class="grid h-full grid-flow-col gap-2 card rounded-box place-items-center ">
        <!-- Facebook -->
        <button
          type="submit"
          class="btn btn-info btn-circle  text-white bg-blue-500 hover:text-blue-500"          
          >
          <i class="fa-brands fa-square-facebook text-2xl"></i>
        
        </button>
        <!-- Facebook -->
        <button
          type="submit"
          class="btn btn-error btn-circle  bg-red-500 text-white hover:text-red-500"          
          >
          <i class="fa-brands fa-google text-2xl"></i>
        
        </button>
      </div>

      <div class="divider">OR</div>
      {{-- Name  --}}
      <div class="grid grid-flow-col gap-2">
        <div class="form-control w-full input-primary">
          <label class="label">
            <span class="label-text">First Name</span>
            <span class="label-text-alt text-gray-600">Top Right label</span>
          </label>
          <input type="text" class="input input-bordered input-primary w-full bg-base-200 " autofocus />
          <label class="label">
            <span class="label-text-alt text-gray-600">Bottom Left label</span>
            <span class="label-text-alt text-gray-600">Bottom Right label</span>
          </label>
        </div>
    
        <div class="form-control w-full input-primary">
          <label class="label">
            <span class="label-text">Last Name</span>
            <span class="label-text-alt text-gray-600">Top Right label</span>
          </label>
          <input type="text" class="input input-bordered input-primary w-full bg-base-200 " autofocus />
          <label class="label">
            <span class="label-text-alt text-gray-600">Bottom Left label</span>
            <span class="label-text-alt text-gray-600">Bottom Right label</span>
          </label>
        </div>
    
      </div>
      {{-- Birthday  --}}
      <div class="grid grid-flow-col gap-2 grid-cols-3">
        <div class="form-control w-full max-w-xs">
          <label class="label">
            <span class="label-text">Birthday</span>
          </label>
          <select class="select select-bordered select-primary">
            <option disabled selected>Month</option>
            <option>Star Wars</option>
            <option>Harry Potter</option>
            <option>Lord of the Rings</option>
            <option>Planet of the Apes</option>
            <option>Star Trek</option>
          </select>
        </div>
        <div class="form-control w-full max-w-xs">
          <label class="label">
            <span class="label-text">&nbsp;</span>
          </label>
          <select class="select select-bordered select-primary">
            <option disabled selected>Day</option>
            <option>Star Wars</option>
            <option>Harry Potter</option>
            <option>Lord of the Rings</option>
            <option>Planet of the Apes</option>
            <option>Star Trek</option>
          </select>
        </div>
        <div class="form-control w-full max-w-xs">
          <label class="label">
            <span class="label-text">&nbsp;</span>
          </label>
          <select class="select select-bordered select-primary">
            <option disabled selected>Year</option>
            <option>Star Wars</option>
            <option>Harry Potter</option>
            <option>Lord of the Rings</option>
            <option>Planet of the Apes</option>
            <option>Star Trek</option>
          </select>
        </div>
      </div>
      {{-- Nationality  --}}
      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Nationality</span>
          <span class="label-text-alt">Alt label</span>
        </label>
        <select class="select select-bordered">
          <option disabled selected>Select</option>
          <option>Star Wars</option>
          <option>Harry Potter</option>
          <option>Lord of the Rings</option>
          <option>Planet of the Apes</option>
          <option>Star Trek</option>
        </select>
        <label class="label">
          <span class="label-text-alt">Alt label</span>
          <span class="label-text-alt">Alt label</span>
        </label>
      </div>
      {{-- Username or Email --}}
      <div class="form-control w-full input-primary">
        <label class="label">
          <span class="label-text">Username/Email</span>
          <span class="label-text-alt text-gray-600">Top Right label</span>
        </label>
        <input type="text" class="input input-bordered input-primary w-full bg-base-200 " autofocus />
        <label class="label">
          <span class="label-text-alt text-gray-600">Bottom Left label</span>
          <span class="label-text-alt text-gray-600">Bottom Right label</span>
        </label>
      </div>
  
      <div class="form-control w-full">
        <label class="label">
          <span class="label-text">Password</span>
          <span class="label-text-alt text-gray-600">Top Right label</span>
        </label>
        <input type="password" placeholder="Type here" class="input input-bordered input-primary bg-base-200 w-full " />
        <label class="label">
          <span class="label-text-alt text-gray-600">Bottom Left label</span>
        </label>
      </div>
      <button type="submit" class="inline-block rounded-lg bg-primary px-5 py-3 text-sm font-medium text-white uppercase w-full">
          Sign in
      </button>
      <p class="text-sm text-center">
          Already account?
          <a class="underline text-primary" href="/login">Sign in</a>
      </p>
      <a class="text-sm underline text-primary py-12 text-center" href="/">Back to Home</a>

    </form>
  </div>
</div>
</div>

<script src="{{Vite::asset("resources/js/finisher-header.es5.min.js")}}" type="text/javascript"></script>
<script type="text/javascript">
  new FinisherHeader({
    "count": 100,
    "size": {
      "min": 2,
      "max": 8,
      "pulse": 0
    },
    "speed": {
      "x": {
        "min": 0,
        "max": 0.4
      },
      "y": {
        "min": 0,
        "max": 0.6
      }
    },
    "colors": {
      "background": "#16a34a",
      "particles": [
        "#fbfcca",
        "#d7f3fe",
        "#ffd0a7"
      ]
    },
    "blending": "overlay",
    "opacity": {
      "center": 1,
      "edge": 0
    },
    "skew": 0,
    "shapes": [
      "c"
    ]
  });
  </script>

@include('partials.footer')
