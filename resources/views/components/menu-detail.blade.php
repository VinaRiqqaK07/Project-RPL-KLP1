<section
  class="fixed top-32 flex h-fit max-h-[85vh] w-[400px] flex-col gap-5 overflow-y-auto rounded-t-3xl bg-white px-5 pb-12"
>
  <header class="sticky top-0 flex items-center justify-between bg-white pb-2 pt-5">
    <p class="text-lg font-semibold">Detail Menu</p>

    <button id="closeMenuDetail">
      <i class="fa-solid fa-circle-xmark fa-lg"></i>
    </button>
  </header>

  <img
    src="https://www.bifolcomatty.co.uk/wp-content/uploads/2019/08/placeholder-square.jpg"
    alt=""
    class="h-40 w-full rounded-xl object-cover"
  />

  <section class="w-fit rounded-full bg-[#E1FFD4] px-5 py-1 text-xs font-semibold">
    <p>Label</p>
  </section>

  <section class="flex flex-col gap-3">
    <p class="text-lg font-semibold">Nama Menu</p>
    <p class="text-base">Rp20.000</p>
  </section>

  <section class="flex flex-col gap-1">
    <p class="text-base font-semibold">Deskripsi</p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsam dolor consequatur amet aliquam non cum iusto
      quibusdam necessitatibus ea libero, error omnis, eaque mollitia corporis et? Exercitationem, cumque dolorem.
    </p>
  </section>

  <section class="flex flex-col gap-2">
    <p class="text-base font-semibold">Catatan:</p>
    <div class="rounded-xl bg-[#F3F3F3] p-3">
      <textarea
        name="Tulis Catatan"
        id=""
        rows="3"
        class="w-full border-none bg-[#F3F3F3] text-xs outline-none"
        placeholder="Tulis Catatan..."
      ></textarea>
    </div>
  </section>

  <section class="flex justify-between">
    <p class="text-base font-semibold">Jumlah</p>

    <section class="flex items-center gap-4 text-center">
      <i class="fa-regular fa-square-minus fa-xl text-gray-400"></i>
      <p class="rounded-full bg-[#F1F2F2] px-6 py-1">{{ $qty ?? 1 }}</p>
      <i class="fa-regular fa-square-plus fa-xl text-gray-400"></i>
    </section>
  </section>

  <section
    class="w-full cursor-pointer rounded-lg bg-[#5A973C] py-3 text-center text-sm font-semibold text-white"
    id="showToast"
  >
    <p>Tambah ke Keranjang</p>
  </section>
</section>
