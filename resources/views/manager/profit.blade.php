<x-app-layout>

    <div class="w-full flex flex-col gap-5 items-center mt-5 mb-5">
        {{-- Section Profit Chart --}}
        <div class="w-full bg-gray-800 border-gray-700 border-b p-4 rounded-md flex flex-col gap-2">
            <h1 class="text-2xl text-center text-white font-bold">
                Profit Chart
            </h1>
        </div>

        <div class="w-full bg-gray-800 rounded-lg shadow-lg p-4 md:p-6">
            <div class="flex justify-between border-gray-700 border-b pb-3">
                <div class=" flex flex-col gap-3">
                    <h1 class="text-base font-normal text-gray-400 pb-1">Profit POS Koperasi</h1>
                    <h1 class="text-3xl font-bold text-white">January</h1>
                    <h1 class="leading-none text-xl font-bold text-white">RP. 1,350,000</h1>
                </div>
              {{-- <dl>
                <dt class="text-base font-normal text-gray-400 pb-1">Profit POS Koperasi</dt>
                <dd class="leading-none text-3xl font-bold text-white ">RP.15000000</dd>
              </dl> --}}
              <div>
                <span class="bg-green-900 text-green-300 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md">
                  Profit rate 23.5%
                </span>
              </div>
            </div>
        
            <div class="flex gap-20 justify-center py-3">
              <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Income</dt>
                <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400">Rp. 2,000,000</dd>
              </dl>
              <dl>
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Expense</dt>
                <dd class="leading-none text-xl font-bold text-red-600 dark:text-red-500">- Rp. 650,000</dd>
              </dl>
            </div>
        
            <div id="bar-chart"></div>
              <div class="grid grid-cols-1 items-center border-t border-gray-700 justify-between">
                <div class="flex justify-between items-center pt-5">
                  <!-- Button -->
                  <button
                    id="dropdownDefaultButton"
                    data-dropdown-toggle="lastDaysdropdown"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-400 text-center inline-flex items-center hover:text-white"
                    type="button">
                    January
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div id="lastDaysdropdown" class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
                      <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">January</a>
                            </li>
                            <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">February</a>
                            </li>
                            <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">March</a>
                            </li>
                            <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">May</a>
                            </li>
                      </ul>
                  </div>
                  <a
                        href="{{ route('transaction.index') }}"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-500  hover:bg-gray-700 focus:ring-gray-700 border-gray-700 px-3 py-2">
                            Transaction History
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                  </a>
                </div>
            </div>
        </div>


    </div>

    

    <script>
         document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('dropdownDefaultButton');
            const dropdown = document.getElementById('lastDaysdropdown');

            button.addEventListener('click', function (event) {
              event.stopPropagation();
              dropdown.classList.toggle('hidden');
            });
        
            document.addEventListener('click', function (event) {
              const isClickInsideButton = button.contains(event.target);
              const isClickInsideDropdown = dropdown.contains(event.target);
            
              if (!isClickInsideButton && !isClickInsideDropdown) {
                dropdown.classList.add('hidden');
              }
            });
        });
        
        const options = {
          series: [
            {
              name: "Income",
              color: "#31C48D",
              data: ["250000", "450000", "750000", "550000"],
            },
            {
              name: "Expense",
              data: ["100000", "200000", "150000", "200000"],
              color: "#F05252",
            }
          ],
          chart: {
            sparkline: {
              enabled: false,
            },
            type: "bar",
            width: "100%",
            height: 400,
            toolbar: {
              show: false,
            }
          },
          fill: {
            opacity: 1,
          },
          plotOptions: {
            bar: {
              horizontal: true,
              columnWidth: "100%",
              borderRadiusApplication: "end",
              borderRadius: 6,
              dataLabels: {
                position: "top",
              },
            },
          },
          legend: {
            show: true,
            position: "bottom",
          },
          dataLabels: {
            enabled: false,
          },
          
          xaxis: {
            labels: {
              show: true,
              style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
              },
              formatter: function(value) {
                return "Rp." + value
              }
            },
            categories: ["Week 1", "Week 2", "Week 3", "Week 4"],
            axisTicks: {
              show: false,
            },
            axisBorder: {
              show: false,
            },
          },
          yaxis: {
            labels: {
              show: true,
              style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
              }
            }
          },
          grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
              left: 2,
              right: 2,
              top: -20
            },
          },
          fill: {
            opacity: 1,
          }
        }

        if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
          const chart = new ApexCharts(document.getElementById("bar-chart"), options);
          chart.render();
        }

    </script>
</x-app-layout>