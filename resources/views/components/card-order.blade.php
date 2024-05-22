<section class="p-3 bg-slate-50 shadow-lg my-7 mx-4 rounded-xl">
    <section class="flex gap-3 p-2">
        <section class="w-fit h-fit">
            <img src="https://th.bing.com/th/id/OIP.R-2OxDXmafvmLXU57LFELQHaHa?w=167&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" width="80" height="80">
        </section>   
        <section class="w-full">
            <section class="mb-2">
                <h3 class="text-sm">{{ $name ?? "Nama menu" }}</h3>
                <p class="font-medium">{{ $price ?? "Rp20.000" }}</p>
            </section>
            <section class="flex justify-between items-center">
                <section class="flex items-center text-center gap-2">
                    <i class="fa-regular fa-square-minus fa-lg text-gray-400"></i>
                    <p class="bg-gray-200 w-8 h-6 rounded-lg">{{ $qty ?? 1 }}</p>
                    <i class="fa-regular fa-square-plus fa-lg text-gray-400"></i>
                </section>
                <button id="deleteButton" class="pe-1" onclick="removeFromCart({{ $id }})">
                    <i class="fa-solid fa-trash-can fa-lg text-red-500 "></i>
                </button>
            </section>
        </section>
    </section>
    <section class="py-2 mt-1 px-2">
        <p class="text-xs font-light">{{ $note ?? "Ini note pesanan" }}</p>
    </section>
</section>