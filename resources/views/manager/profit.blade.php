<x-app-layout>
    <div class="w-full flex flex-col gap-5 items-center mt-3 mb-5 p-6">
        {{-- Section Profit Chart --}}
        <div class="w-full bg-white p-4 border rounded-md flex flex-col gap-2 shadow-md">
            <h1 class="text-2xl text-center text-black font-bold">
                POS Koperasi Sales Report
            </h1>
        </div>

        <div class="w-full bg-white border rounded-xl shadow-lg p-10">
            <div class="flex justify-between pb-3">
                <div class=" flex flex-col gap-3">
                    <h1 class="text-base font-bold text-gray-400 pb-1">Profit POS Koperasi</h1>
                    <h1 class="leading-none text-xl font-bold text-black">Koperasi's Profit : RP. 1,350,000</h1>
                </div>
            </div>
          
            <div class="flex gap-20 justify-center py-3">
                <dl>
                    <dt class="text-base font-bold text-gray-500 pb-1">Income</dt>
                    <dd class="leading-none text-xl font-bold text-green-500">Rp. 2,000,000</dd>
                </dl>
                <dl>
                    <dt class="text-base font-bold text-gray-500 pb-1">Expense</dt>
                    <dd class="leading-none text-xl font-bold text-red-600">- Rp. 650,000</dd>
                </dl>
            </div>
          
            <div id="bar-chart"></div>
            
            <div class="items-center justify-between">
                <div class="flex justify-between items-center pt-5">
                    <a
                        href="{{ route('transaction.index') }}"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-500 hover:bg-gray-700 focus:ring-gray-700 border-gray-700 px-3 py-2">
                            Transaction History
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const data = {
                January: { income: 2000000, expense: 650000 },
                February: { income: 2500000, expense: 700000 },
                March: { income: 2200000, expense: 750000 },
                April: { income: 2400000, expense: 800000 },
                May: { income: 2600000, expense: 850000 },
                June: { income: 2800000, expense: 900000 },
            };

            const months = Object.keys(data);
            const incomeData = months.map(month => data[month].income);
            const expenseData = months.map(month => data[month].expense);
            const profitData = months.map(month => data[month].income - data[month].expense);

            const chartOptions = {
                series: [
                    {
                        name: 'Income',
                        data: incomeData
                    },
                    {
                        name: 'Expense',
                        data: expenseData
                    },
                    {
                        name: 'Profit',
                        data: profitData
                    }
                ],
                chart: {
                    type: 'bar',
                    height: 650,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        borderRadius: 9,
                        dataLabels: {
                            position: 'top'
                        }
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                xaxis: {
                    categories: months,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-black'
                        },
                        formatter: function(value) {
                            return "Rp. " + value;
                        }
                    },
                    axisBorder: {
                      show: false,
                    },
                },
                yaxis: {
                    labels: {
                      style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-bold fill-black'
                        },
                        formatter: function(value) {
                            return value;
                        }
                    }
                },
                grid: {
                    show: true,
                    strokeDashArray: 6,
                    padding: {
                        left: 5,
                        right: 2,
                        top: -20
                    },
                },
                fill: {
                    opacity: 1,
                }
            };

            const chart = new ApexCharts(document.getElementById('bar-chart'), chartOptions);
            chart.render();
        });
    </script>

</x-app-layout>
