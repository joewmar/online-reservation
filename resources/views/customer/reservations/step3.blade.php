@include('partials.header')
<div class="navbar bg-base-100">
  <a class="btn btn-ghost normal-case text-xl" href="/">Back Home</a>
</div>
<section class="p-6 bg-base-200 text-neutral">
	<form action="" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-medium">Confirmation Inormation</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="firstname" class="text-sm">First name</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="lastname" class="text-sm">Last name</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="email" class="text-sm">Email</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
				<div class="col-span-full">
					<label for="address" class="text-sm">Address</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="city" class="text-sm">City</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="state" class="text-sm">State / Province</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="zip" class="text-sm">ZIP / Postal</label>
          <h1 class="text-2xl mt-2">Hello</h1>
				</div>
			</div>
		</fieldset>
    <div class="mt-4 flex justify-end gap-5 mx-5">
      <a href="/reservation/step1" class=" btn btn-ghost gap-2">
        Refill
        <i class="fa-solid fa-file-arrow-up"></i>
      </a>
      <button type="submit" class="btn btn-primary gap-2">
        Confirm
        <i class="fa-solid fa-check"></i>            
      </button>
    </div>
	</form>
</section>

@include('partials.footer')
