@include('partials.header')
<x-cus2_navbar :activeNav="$activeNav" />

<section class="pt-24">
  <div class="tabs w-full flex justify-center">
    <a class="tab tab-lg tab-lifted tab-active">Pending</a> 
    <a class="tab tab-lg tab-lifted">Canceled/Reschedule</a>
    <a class="tab tab-lg tab-lifted">Confirmed</a> 
    <a class="tab tab-lg tab-lifted">Previous</a>
    <div class="grid card bg-base-100 rounded-box place-items-center h-full w-5/6">
      <div class="overflow-x-auto w-full">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Number of guest</th>
              <th>Packages</th>
              <th>Accommodation</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            <tr>
              <td>
                <div class="flex items-center space-x-3">
                  <div class="avatar">
                    <div class="mask mask-squircle w-12 h-12">
                      <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                    </div>
                  </div>

                </div>
              </td>
              <td>
                <div>
                  <div class="font-bold">Hart Hagerty</div>
                  <div class="text-sm opacity-50">United States</div>
                </div>
              </td>
              <td>2 guest</td>
              <td>Package 2</td>
              <td>Double Charlet Room</td>
              <th>
                <button class="btn btn-error btn-xs">Cancel</button>
                <button class="btn btn-warning btn-xs">Reschedule</button>
              </th>
            </tr>
            <tr>
              <td>
                <div class="flex items-center space-x-3">
                  <div class="avatar">
                    <div class="mask mask-squircle w-12 h-12">
                      <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                    </div>
                  </div>

                </div>
              </td>
              <td>
                <div>
                  <div class="font-bold">Hart Hagerty</div>
                  <div class="text-sm opacity-50">United States</div>
                </div>
              </td>
              <td>2 guest</td>
              <td>Package 2</td>
              <td>Double Charlet Room</td>
              <th>
                <button class="btn btn-error btn-xs">Cancel</button>
                <button class="btn btn-warning btn-xs">Reschedule</button>
              </th>
            </tr>
            <tr>
              <td>
                <div class="flex items-center space-x-3">
                  <div class="avatar">
                    <div class="mask mask-squircle w-12 h-12">
                      <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                    </div>
                  </div>

                </div>
              </td>
              <td>
                <div>
                  <div class="font-bold">Hart Hagerty</div>
                  <div class="text-sm opacity-50">United States</div>
                </div>
              </td>
              <td>2 guest</td>
              <td>Package 2</td>
              <td>Double Charlet Room</td>
              <th>
                <button class="btn btn-error btn-xs">Cancel</button>
                <button class="btn btn-warning btn-xs">Reschedule</button>
              </th>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>


</section>
@include('partials.footer')
