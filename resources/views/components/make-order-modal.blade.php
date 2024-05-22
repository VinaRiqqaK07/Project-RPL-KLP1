<section class="w-full h-full bg-gray-500">
    <footer class="h-auto w-[400px] rounded-t-xl bg-slate-50 p-4 fixed bottom-0">
        <section class="flex flex-row items-center justify-between mb-4 mt-1">
            <p class="font-bold text-lg">Identitas Pemesanan</p>
            <button id="closeModal"><i class="fa-solid fa-circle-xmark fa-xl"></i></button>
            
        </section>
        <form action="{{ route('order.place') }}" method="POST" >
            @csrf
            <section class="flex flex-col my-1 pb-2 gap-2">
                <label class="font-semibold my-1">Nama Pemesan</label>
                <input type="text" name="customer_name" placeholder="Masukkan nama Anda" class="px-2 py-3 focus:outline-none focus:ring focus:border-blue-300 rounded-lg bg-slate-100 " required/>
                <label class="font-semibold mt-3">Nomor Meja</label>
                <input type="text" name="table_number" placeholder="Masukkan nomor meja" class="px-2 py-3 focus:outline-none focus:ring focus:border-blue-300 rounded-lg bg-slate-100 " required/>    
                <button type="submit" class="w-full py-3 px-4 mt-4 text-white text-md font-semibold bg-[#70B44E] rounded-lg">Pesan</button>
            </section>   
        </form>
    </footer>
</section>