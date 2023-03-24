@include('partials.header')
<div class="header finisher-header" style="width: 100%; height: 100%;">
<div class=" bg-base-200 md:w-5/12 sm:w-full h-full md:h-auto rounded-2xl shadow-lg mx-auto place-items-center">
  <div class="mx-auto px-4 py-20 my-20 sm:px-6 lg:px-8 relative">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">Sign in<h1>
  

    </div>

    <form action="" class="mx-auto mt-8 mb-0 max-w-md space-y-4 ">
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
        <input type="text" placeholder="Type here" class="input input-bordered input-primary bg-base-200 w-full " />
        <label class="label">
          <span class="label-text-alt text-gray-600">Bottom Left label</span>
          <span class="label-text-alt text-gray-600"><a href="" class="link link-primary">Forgot password?</a></span>
        </label>
      </div>
      <button type="submit" class="inline-block rounded-lg bg-primary px-5 py-3 text-sm font-medium text-white uppercase w-full">
          Sign in
      </button>
      <p class="text-sm text-center">
          No account yet?
          <a class="underline text-primary" href="/register">Sign up</a>
      </p>
      <div class="divider">OR</div>
      <div class="grid h-full gap-5 card rounded-box place-items-center ">
        <!-- Facebook -->
        <button
          type="submit"
          class="btn btn-info text-white bg-blue-500 hover:text-blue-500 w-full h-full"          
          >
          <i class="fa-brands fa-square-facebook mx-3"></i>
          Connect with Facebook
        </button>
        <!-- Facebook -->
        <button
          type="submit"
          class="btn  btn-error bg-red-500 text-white hover:text-red-500 w-full h-full"          
          >
          <i class="fa-brands fa-google mx-3"></i>
          Connect with Google
        </button>
        <a class="text-sm underline text-primary py-5" href="/">Back to Home</a>
      </div>
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
