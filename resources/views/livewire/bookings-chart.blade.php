<div class="w-full">
   <div class="">
      <div class="card mb-4">
         <div class="card-header pb-0">
            <h6>Analytics</h6>
            <div class="container">
               <div class="row">
                  <div class="">
                     <canvas id="bookingChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   var labels =  {{ Js::from($bookingLabels) }};
       var bookings =  {{ Js::from($bookingData) }};
      const data = {
         labels: labels,
         datasets: [{
           label: 'Monthly Inquires',
           backgroundColor: 'rgb(255, 99, 132)',
           borderColor: 'rgb(255, 99, 132)',
           data: bookings,
         }]
       };
       const config = {
         type: 'line',
         data: data,
         options: {
         animations: {
         tension: {
         duration: 1000,
         easing: 'linear',
         from: 1,
         to: 0,
         loop: true
       }
     },
     },
   };
     const myChart = new Chart(
     document.getElementById('bookingChart'),
     config
   );
</script>
@endpush
