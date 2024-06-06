<x-app-layout>
    <div class="w-full flex flex-col gap-5 mt-3 mb-5 p-6">
        {{-- Section Profit Chart --}}
        <div class="w-full bg-white p-4 border rounded-md flex flex-col gap-2 shadow-md">
            <h1 class="text-2xl text-center text-black font-bold">
                POS Koperasi Sales Report
            </h1>
        </div>
        <div class="flex items-center justify-end">
            <form action="{{ route('manager.profit') }}" method="GET">
                <label for="year">Select Year:</label>
                <select name="year" id="year" class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @for ($i = date('Y'); $i >= 2020; $i--)
                    <option value="{{ $i }}" {{ $year == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                <button type="submit" class="ml-2 rounded-md bg-[#1B4F7C] px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Filter</button>
            </form>
        </div>

        <div class="w-full bg-white border rounded-xl shadow-lg p-10">
            <div class="flex justify-between pb-3">
                <div class=" flex flex-col gap-3">
                    <h1 class="text-base font-bold text-gray-400 pb-1">Profit POS Koperasi</h1>
                    <h1 class="leading-none text-xl font-bold text-black">Koperasi's Profit : {{format_rupiah($profit)}}</h1>
                </div>
            </div>

            <div class="flex gap-20 justify-center py-3">
                <dl class="border p-4 px-12 bg-indigo-50">
                    <dt class="text-base font-bold text-gray-500 pb-1">Income</dt>
                    <dd class="leading-none text-xl font-bold text-green-500">{{format_rupiah($totalIncome)}}</dd>
                </dl>
                <dl class="border p-4 px-12 bg-red-100">
                    <dt class="text-base font-bold text-gray-500 pb-1">Expense</dt>
                    <dd class="leading-none text-xl font-bold text-red-600">{{format_rupiah($totalPurchases)}}</dd>
                </dl>
            </div>

            <div id="bar-chart"></div>

            <div class="items-center justify-between">
                <div class="flex justify-between items-center pt-5">
                    <a href="{{ route('transaction.index') }}" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-500 hover:bg-gray-700 focus:ring-gray-700 border-gray-700 px-3 py-2">
                        Transaction History
                    </a>
                </div>
            </div>

        </div>
    </div>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            const data = <?php echo json_encode($data); ?>;

            const months = Object.keys(data);
            const incomeData = months.map(month => data[month].income);
            const expenseData = months.map(month => data[month].expense);
            const profitData = months.map(month => data[month].profit);

            const chartOptions = {
                series: [{
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
                    height: 1000,
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
                            cssClass: 'text-xs font-normal text-indigo-500'
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
                            cssClass: 'text-xs font-semibold text-indigo-500'
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