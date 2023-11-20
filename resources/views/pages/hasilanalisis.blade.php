<x-layouts.base title="Analisis Sentimen untuk ISP">

    {{-- Hasil Analisis --}}
    <section>
        <div class="bg-[#EDEDED] pt-[72px]">
            <div class="container mx-auto">
                <div class=" items-center lg:mt-[10rem] mt-20">
                    <div class="content-center px-3 lg:grow lg:px-10">
                        <h1
                            class="font-display not-italic font-extrabold md:text-[50px] text-3xl lg:text-[40px] text-[#262829] pb-8 lg:leading-[100%]">
                            <strong>Hasil Analisis</strong>
                        </h1>
                        <p
                            class="font-display not-italic  font-normal leading-7 text-xl text-justify md:text-[25px] md:leading-9 lg:text-xl max-w-[50rem] text-[#262829] pb-5">
                            Analisis kami dilakukan dengan menggunakan metode algoritma Naive Bayes. 
                            Dengan menggunakan data sentimen terkait kepuasan pelanggan terhadap ke-6 provider internet yang telah diteliti ini,  diantaranya yaitu Biznet, First Media, Iconnect, Indihome, Myrepublic, dan MNC Play sebagai bahan analisis kami. 
                            Maka akan menghasilkan kesimpulan sebagai berikut :
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Data Masing2 Provider --}}
    <div class="bg-[#EDEDED]">
        <div class="container mx-auto">
            <div class="lg:flex items-center pb-10">
                <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                    <h1
                        class="  font-display not-italic font-extrabold text-3xl md:text-[40px] lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                        <strong>Data</strong>
                    </h1>
                    <p
                        class="font-body not-italic font-normal text-justify text-base md:text-[25px] md:leading-9 lg:text-base text-base-600 lg:max-w-[35rem]">
                        Sumber data yang kami dapatkan, diambil melalui media sosial Twitter. Pada data dari masing-masing provider diambil pada tanggal 01 Mei 2022 - 29 Februari 2023, total waktu yang diambil sebanyak 10 bulan. 
                        Dan data yang didapat dari masing-masing provider sangat bervariasi. 
                        Jumlah data dari masing-masing provider dapat dilihat pada tabel berikut ini.</p>
                </div>
                <div class=" p-10 item-center lg:w-[600px]">
                    <div class="relative lg:m-auto rounded-3xl overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Providers
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Jumlah Data
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Biznet
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        01/05/2022 - 29/02/2023
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        13.898
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        First Media
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        01/05/2022 - 29/02/2023
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        28.429
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Iconnect
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        01/05/2022 - 29/02/2023
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        593
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Indihome
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        01/05/2022 - 29/02/2023
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        144.517
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        MNC Play
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        01/05/2022 - 29/02/2023
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        657
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Myrepublic
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        01/05/2022 - 29/02/2023
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        6.415
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Data Masing2 Persentase Sentimen --}}
    <section>
        <div class="bg-[#EDEDED] pb-10">
            <div class="container mx-auto flex rounded-xl bg-[#F6F6F6]/90 items-center space-between">
                <div class="px-10 pb-8 mx-auto text-center mt-10">
                    <div class="">
                        <h1 class="font-display pb-3 text-3xl md:text-[45px] lg:text-3xl font-extrabold text-base-800">Persentase Sentimen</h1>
                    </div>
                    <div class=" mx-auto pb-8 font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                        <h2 class="mt-4 lg:mt-0 font-normal lg:px-32 text-justify lg:text-center text-base md:text-[25px] md:leading-9 lg:text-base text-base-500">
                            Data yang telah dikumpulkan, maka selanjutnya akan dilakukan tahap sentimen polarity.
                            Dimana tahap ini merupakan tahap untuk mengidentifikasi dari setiap data untuk dimasukkan kedalam kelas sentimen.
                            Pada penelitian ini terdapat 3 kelas sentimen yaitu Negatif, Netral, dan Positif. 
                            Hasil persentase kelas sentimen dari setiap provider dapat dilihat pada tabel dan diagram berikut ini.
                        </h2>
                    </div>
                    <div class="grid grid-cols-1  lg:grid-cols-2 gap-10 mx-auto">
                        <div class="relative rounded-3xl overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Providers
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Negatif
                                        </th><th scope="col" class="px-6 py-3 text-center">
                                            Netral
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Positif
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Biznet
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            34,4%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            49%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            16,5%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            First Media
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            33,8%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            58,2%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            8%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Iconnect
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            36,8%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            40,1%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            23,1%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Indihome
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            31,3%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            48,1%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            20,6%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            MNC Play
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            45,9%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            27,1%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            27%
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Myrepublic
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            22,9%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            62,2%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            14,9%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="sentimenchart" class="h-full w-full"></div>
                    </div>
                    <div class=" mx-auto pt-8 font-bold leading-6 font-body lg:w-10/12 xl:w-9/12">
                        <h2 class="font-normal text-justify lg:text-center text-base md:text-[25px] md:leading-9 lg:text-base text-base-500">Berdasarkan tabel dan diagram diatas menunjukkan bahwa persentase sentimen kelas positif paling tinggi diraih oleh provider MNC Play dengan persentase mencapai <strong>27%</strong>, dan persentase sentimen kelas negatif paling tinggi diraih oleh provider MNC Play juga dengan persentase mencapai <strong>45,9%</strong>.
                             Sedangkan persentase sentimen kelas positif paling rendah diraih oleh provider First Media dengan persentase hanya mencapai <strong>8%</strong>. dan persentase sentimen kelas negatif paling rendah diraih oleh provider Myrepublic dengan persentase sebesar <strong>22,9%</strong>.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Data Masing2 Persentase Pengujian --}}
    <section>
        <div class="bg-[#EDEDED]">
            <div class="container mx-auto flex rounded-xl bg-[#F6F6F6]/90 items-center space-between">
                <div class="px-10 pb-8 mx-auto text-center mt-10">
                    <div class="">
                        <h1 class="font-display pb-3 text-3xl md:text-[45px] lg:text-3xl font-extrabold text-base-800">Persentase Pengujian</h1>
                    </div>
                    <div class=" mx-auto pb-8 font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                        <h2 class="mt-4 lg:mt-0 font-normal text-justify lg:text-center text-base md:text-[25px] md:leading-9 lg:text-base lg:px-32 text-base-500">
                            Setelah data mendapatkan kelas sentimennya masing-masing, maka pada tahap selanjutnya adalah melakukan pengujian klasifikasi pada model algoritma yang digunakan yaitu Naive Bayes dengan metrik.
                            Metrik membantu untuk mengukur seberapa baik model dapat memahami dan menganalisis sentimen yang terkandung dalam teks.
                            Terdapat 4 metrik yang digunakan untuk mengukur atau mengevaluasi kinerja sebuah model, diantaranya adalah <strong>Accuracy</strong>, <strong>Precision</strong>, <strong>Recall</strong>, dan <strong>F1-Score</strong>.
                            Hasil persentase pengujian dari setiap provider dapat dilihat pada tabel dan diagram berikut ini.
                        </h2>
                    </div>
                    <div class="grid grid-cols-1  lg:grid-cols-2 gap-10 mx-auto">
                        <div class="relative rounded-3xl overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Providers
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Accuracy
                                        </th><th scope="col" class="px-6 py-3 text-center">
                                            Precision
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Recall
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            F1-Score
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Biznet
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            84%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            84%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            84%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            First Media
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            83%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            83%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            83%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Iconnect
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            89%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            91%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            89%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            89%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Indihome
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            MNC Play
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            87%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            85%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            81%
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Myrepublic
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            89%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            89%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            89%
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            88%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="metrikchart" class="h-full w-full"></div>
                    </div>
                    <div class=" mx-auto pt-8 font-bold leading-6 font-body lg:w-10/12 xl:w-9/12">
                        <h2 class="font-normal text-justify lg:text-center text-base md:text-[25px] md:leading-9 lg:text-base text-base-500">
                            Berdasarkan tabel dan diagram diatas menunjukkan bahwa perbandingan persentase pengujian pada tiap provider sangatlah tipis.
                            Pada metrik accuracy, persentase paling tinggi diraih oleh provider Iconnect, dan Myrepublic dengan nilai sebanyak <strong>89%</strong>.
                            Pada metrik Precision, persentase paling tinggi diraih oleh provider Iconnect dengan nilai sebanyak <strong>91%</strong>.
                            Pada metrik Recall, persentase paling tinggi diraih oleh provider Iconnect, dan Myrepublic dengan nilai sebanyak <strong>89%</strong>.
                            Dan pada metrik F1-Score, persentase paling tinggi diraih oleh provider Iconnect dengan nilai sebanyak <strong>89%</strong>.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Conclusion --}}
    <div class="bg-[#EDEDED]">
        <div class="container mx-auto">
            <div class="lg:flex items-center lg:pt-10 pb-10">
                <div class="lg:order-2 item-center lg:w-[800px]">
                    <img class="mx-auto lg:w-[400px] md:w-[600px]"
                        src="{{ URL::to('/img/providers/conclusion.svg') }}">
                </div>
                <div class="item-center px-3 lg:grow lg:px-10 lg:ml-[95px] ">
                    <h1
                        class="  font-display not-italic font-extrabold text-3xl md:text-[45px] lg:text-[35px] text-[#262829] pb-5  lg:leading-[100%]">
                        <strong>Kesimpulan</strong>
                    </h1>
                    <p
                        class="font-body not-italic font-normal text-base leading-5 md:text-[25px] md:leading-9 lg:text-base text-justify text-base-600 lg:max-w-[1000px]">
                        Pada hasil pengujian algoritma naive bayes dengan nilai metrik yang cukup baik dengan rata-rata mencapai 86%.
                        <br><br>Membuktikan bahwa persentase tertinggi dengan sentimen kelas positif diraih oleh provider <strong>MNC Play</strong> sebesar <strong>27%</strong>. dengan data positif sebanyak 173 dari total data sebanyak 657 data.
                        Dan persentase terendah dengan sentimen kelas positif diraih oleh provider <strong>First Media</strong> sebesar <strong>8%</strong>. dengan data positif sebanyak 1.984 dari total data sebanyak 28.429 data.
                        <br><br>Dan juga membuktikan bahwa persentase tertinggi dengan sentimen kelas negatif diraih oleh provider <strong>MNC Play</strong> sebesar <strong>45,9%</strong>. dengan data negatif sebanyak 294 dari total data sebanyak 657 data.
                        Dan persentase terendah dengan sentimen kelas negatif diraih oleh provider <strong>Myrepublic</strong> sebesar <strong>22,9%</strong>. dengan data negatif sebanyak 1.422 dari total data sebanyak 6.415 data.
                        <br> 
                        </p>
                </div>
            </div>
        </div>
    </div>
    
</x-layouts.base>