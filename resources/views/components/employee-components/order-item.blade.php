<section class="my-2 rounded-lg bg-gray-100 p-1 shadow-lg">
    <section class="flex items-center justify-center gap-3 p-2">
      <section class="h-full w-fit">
        <i class="fa-solid fa-clipboard-list text-4xl text-green-500"></i>
      </section>
      <section class="w-full">
        <section class="mb-2">
          <h3 class="text-sm font-medium">A.N. {{ $customer_name ?? "Nama Customer" }}</h3>
          <p class="font-normal text-sm">Table : {{ $table_number ?? 0 }}</p>
        </section>
      </section>
      <section>
        <i class="fa-solid fa-chevron-right"></i>
      </section>
    </section>
  </section>
