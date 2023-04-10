<section class="bg-neutral-300 text-netural w-screen h-full ml-0 md:ml-56 mt-16">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-extrabold sm:text-4xl">Reservation</h2>
      </div>
      
      {{-- Calendar  --}}
      <div class="my-20">
        <div id='calendar'></div>

      </div>   

      {{-- Table  --}}
      <div class="my-20">
        
        <div class="overflow-x-auto">
          <table class="table w-full text-neutral">
            <!-- head -->
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Job</th>
                <th>Favorite Color</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              <tr>
                <th>1</th>
                <td>Cy Ganderton</td>
                <td>Quality Control Specialist</td>
                <td>Blue</td>
              </tr>
              <!-- row 2 -->
              <tr class="active">
                <th>2</th>
                <td>Hart Hagerty</td>
                <td>Desktop Support Technician</td>
                <td>Purple</td>
              </tr>
              <!-- row 3 -->
              <tr>
                <th>3</th>
                <td>Brice Swyre</td>
                <td>Tax Accountant</td>
                <td>Red</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>    
    </div>    
</section>
