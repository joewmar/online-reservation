@include('partials.header')
<x-system_navbar />
@php
     $arrSideBarSettings = 
        [
            "Room" => [
                "icon" => "fa-sharp fa-solid fa-house",
                "link" => "/system/settings/",
            ],
            "Rides" => [
                "icon" => "fa-solid fa-motorcycle",
                "link" => "/system/settings/rides",
            ],
            "Accounts" => [
                "icon" => "fa-solid fa-users",
                "link" => "/system/settings/accounts",
            ],
        ];
@endphp
<main class="flex">
    <x-sidebar :items="$arrSideBarSettings" :active="$activeBar"/>

    <section class="{{$systemBG}} h-screen text-neutral w-screen ml-0 md:ml-56 md:mt-16">
        <div
          class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:px-8"
        >
          <div class="mx-auto max-w-lg text-center ">
            <h2 class="text-3xl font-bold sm:text-4xl">Rides</h2>
      
          </div>
      
          <div class="mt-8">
            <div class="mb-3 float-right">
              <a href="#" class="btn btn-primary text-base-100">
                Add Rides
              </a>
            </div>
            <div class="overflow-x-auto w-full shadow-2xl">
              <table class="table w-full ">
                <!-- head -->
                <thead>
                <tr>
                  <th>No</th>
                  <th>Ride Vechile Model</th>
                  <th>How many vechicle</th>
                  <th>Maximium of Guest</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr>
                  <td>1</td>
                  <td>ATV</td>
                  <td>4</td>
                  <td>2 Guest</td>
                  <th>
                    <button class="link link-primary">Edit details</button>
                  </th>
                </tr>
                <!-- row 2 -->
                <tr>
                    <td>1</td>
                    <td>4x4 Jeep Wrangler</td>
                    <td>5</td>
                    <td>7 Guest</td>
                    <th>
                        <button class="link link-primary">Edit details</button>
                    </th>
                </tr>
    
                </tbody>
                
              </table>
              </div>
          </div>
        </div>    
    </section>
    

    
</main>

@include('partials.footer')