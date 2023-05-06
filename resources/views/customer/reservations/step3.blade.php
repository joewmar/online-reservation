@include('partials.header')
<div class="navbar bg-base-100">
  <a class="btn btn-ghost normal-case text-xl" href="/">Back Home</a>
</div>
<section class="p-6 bg-base-200 text-neutral">
	<div class="flex justify-center item- pb-10 text-center ">
		<ul class="w-full steps steps-vertical lg:steps-horizontal">
		  <li data-content="✓" class="step step-primary">Accommodations and Tour</li>
		  <li data-content="✓" class="step step-primary">Details</li>
		  <li class="step step-primary">Confirmation</li>
		</ul>
	  </div>
	<form action="" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-medium">Confirmation Inormation</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full">
					<label class="flex space-x-4 text-md text-lg font-bold">
						<span class="pb-4 indent-14">Full Name: </span>
						&nbsp; &nbsp; &nbsp; &nbsp;
						<span class="text-2xl font-light ml-5">Hello World</span>
					</label>
				</div>
				<div class="col-span-full">
					<label class="flex space-x-4 text-md text-lg font-bold">
						<span class="pb-4 indent-14">Age: </span>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
						<span class="text-2xl font-light ml-5">20 years old</span>
					</label>
				</div>
				<div class="col-span-full">
					<label class="flex space-x-4 text-md text-lg font-bold">
						<span class="pb-4 indent-14 ">Country: </span>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;

						<span class="text-2xl font-light ml-5">Philippines</span>
					</label>
				</div>
				<div class="col-span-full">
					<label class="flex space-x-4 text-md text-lg font-bold">
						<span class="pb-4 indent-14 ">Nationality: </span>
						&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						<span class="text-2xl font-light ml-5">Filipino</span>
					</label>
				</div>
				<div class="col-span-full">
					<label class="flex space-x-4 text-md text-lg font-bold">
						<span class="pb-4 indent-14 ">Fees: </span>
						&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
						<span class="text-2xl font-light ml-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic delectus, dolorum quidem voluptas sit perspiciatis, totam ex, officia alias quia exercitationem obcaecati deleniti asperiores praesentium? Velit dolorum quia praesentium minima!</span>
					</label>
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
