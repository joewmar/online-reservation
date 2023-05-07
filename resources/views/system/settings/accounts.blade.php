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
            <h2 class="text-3xl font-bold sm:text-4xl">Employee Accounts</h2>
      
          </div>
          <div class="mt-8">
            <div class="mb-3 float-right">
              <a href="#" class="btn btn-primary text-base-100">
                Add Account
              </a>
            </div>
            <div class="overflow-x-auto w-full shadow-2xl">
              <table class="table w-full ">
                <!-- head -->
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Full Name</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr>
                  <td>20235687</td>
                  <td>Juan Dela Cruz</td>
                  <td>Front Desk</td>
                  <th>
                  <button class="link link-primary">More details</button>
                  </th>
                </tr>
                <!-- row 2 -->
                <tr>
                    <td>1897871</td>
                    <td>Mark Lito Basco</td>
                    <td>Front Desk</td>
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