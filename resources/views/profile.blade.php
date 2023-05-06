@include('partials.header')
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Item 1</a></li>
        <li tabindex="0">
          @include('components.customer.navbar_items')
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      @include('components.customer.navbar_items')
    </ul>
  </div>
  <div class="navbar-end">
    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
      <div class="w-10 rounded-full">
        <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
      </div>
    </label>
  </div>
</div>
{{-- Profile section --}}
<section class="p-6 text-neutral bg-base-300  ">
	<form novalidate="" action="" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-bold text-xl">Edit Profile</p>
				<p class="text-xs">Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Full Name</span>
            </label>
            <input type="text" class="input input-bordered input-md input-primary w-full" />
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Birthday</span>
            </label>
            <input type="text" placeholder="Type here" class="input input-bordered input-md input-primary w-full" />
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
				<div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Nationality</span>
            </label>
            <select class="select select-bordered select-primary">
              <option disabled selected>Select Nationality</option>
              <option>Allow</option>
            </select>
            <label class="label">
              <span class="label-text-alt">Alt label</span>
              <span class="label-text-alt">Alt label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Address</span>
            </label>
            <textarea id="bio" placeholder="" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 border-gray-700 text-gray-900"></textarea>            
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Country</span>
            </label>
            <select class="select select-bordered select-primary">
              <option disabled selected>Select Country</option>
              <option>Allow</option>
            </select>
            <label class="label">
              <span class="label-text-alt">Alt label</span>
              <span class="label-text-alt">Alt label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Username</span>
            </label>
            <input type="text" placeholder="Type here" class="input input-bordered input-md input-primary w-full" />
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="text" placeholder="Type here" class="input input-bordered input-md input-primary w-full" />
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Contact Number</span>
            </label>
            <input type="tel" placeholder="Type here" class="input input-bordered input-md input-primary w-full" />
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="text" placeholder="Type here" class="input input-bordered input-md input-primary w-full" />
            <label class="label">
              <span class="label-text-alt">Bottom Left label</span>
              <span class="label-text-alt">Bottom Right label</span>
            </label>
          </div>
				</div>
        <div class="col-span-full sm:col-span-3">
          <div class="form-control w-full">
            <label class="label">
              <span class="label-text">Valid ID</span>
            </label>
            <input type="file" class="file-input file-input-bordered file-input-primary w-full " />
            <label class="label">
              <span class="label-text-alt">Alt label</span>
              <span class="label-text-alt">Alt label</span>
            </label>
          </div>
				</div>
				<div class="col-span-full">
					<label for="bio" class="text-sm">Avatar Photo</label>
					<div class="flex items-center space-x-2">
						<img src="https://source.unsplash.com/30x30/?random" alt="" class="w-10 h-10 rounded-full">
						<button type="button" class="btn btn-primary btn-sm">Change</button>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
</section>
@include('partials.footer')
