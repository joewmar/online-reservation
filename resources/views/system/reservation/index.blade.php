<section class="{{$systemBG}} text-netural w-screen h-full ml-0 md:ml-56 mt-16">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-extrabold sm:text-4xl">Reservation</h2>
      </div>
      
      {{-- Calendar  --}}
      <button class="btn btn-primary float-right gap-2">
        <i class="fa fa-user" aria-hidden="true"></i>
        Add Book
      </button>
      <div class="my-20">
        <div id='calendar'></div>

      </div>   

      {{-- Table  --}}
      <div class="my-20">
        <x-search />
        <div class="overflow-x-auto w-full">
          <table class="table w-full">
            <!-- head -->
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Age</th>
                <th>Nationality</th>
                <th>Status</th>
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
                <td>22 years old</td>
                <td>American</td>
                <td>Pending</td>
                <th>
                  <button class="link link-primary">Details</button>
                </th>
              </tr>
  
            </tbody>
          </table>
        </div>
      </div>    
    </div>    
</section>

<script type="text/javascript" src='{{Vite::asset("resources/js/fullcalendar/dist/index.global.js")}}'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        aspectRatio: 2,
        height: 450,
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
    });
    calendar.render();
    });

</script>