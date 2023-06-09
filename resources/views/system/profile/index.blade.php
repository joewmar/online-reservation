@include('partials.header')
<x-system_navbar />
@php
     $arrSideBarSettings = 
        [
            "Edit Profile " => [
                "icon" => "fa-solid fa-address-card",
                "link" => "/system/profile"
            ],
            "Social Link" => [
                "icon" => "fa-sharp fa-solid fa-link",
                "link" => "/system/profile/link",
            ],
        ];
@endphp
<main class="flex">
    <x-sidebar :items="$arrSideBarSettings" :active="$activeBar"/>
    <section class="{{$systemBG}} text-neutral w-screen h-full ml-0 md:ml-56 md:mt-16">
        <div
          class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
        >
          <div class="mx-auto max-w-lg text-center">
            <h2 class="text-3xl font-bold sm:text-4xl">Edit Profile</h2>
      
          </div>
          <section class="pt-24 p-6 text-neutral">
            <form novalidate="" action="" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
                <fieldset class="grid grid-cols-4  gap-6 p-6 rounded-md shadow-sm">
                    <div class="grid grid-cols-1 gap-4 col-span-full lg:col-span-3">
                        <div>
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
                <div>
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
                <div>
                  <div class="form-control w-full">
                    <label class="label">
                      <span class="label-text">Passowrd</span>
                    </label>
                    <input type="password" placeholder="Type here" class="input input-bordered input-md input-primary w-full" />
                    <label class="label">
                      <span class="label-text-alt">Bottom Left label</span>
                      <span class="label-text-alt link link-primary">Change password</span>
                    </label>
                  </div>
                    </div>
                </fieldset>
            </form>
        </section>

        </div>    
    </section>
    
    

@include('partials.footer')