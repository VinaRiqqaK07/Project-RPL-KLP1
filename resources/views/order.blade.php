<x-layouts.app>
  <x-slot:slot>
    <div class="h-full bg-sunset-orange">
      <header class="flex flex-col gap-4 px-8 py-6">
        <section class="flex gap-4">
          <img
            src="https://p1.hiclipart.com/preview/249/454/412/frost-pro-for-os-x-icon-set-now-free-blank-white-circle-png-clipart.jpg"
            alt="logo"
            width="24"
            height="24"
          />
          <p class="font-semibold text-white">Rumah Makan</p>
        </section>

        <section class="flex h-10 w-auto flex-col justify-center rounded-xl bg-moon-gray p-2">
          <div class="flex h-full w-full items-center justify-between rounded-xl bg-white p-2">
            <div class="flex items-center gap-4">
              <div>
                <i class="fa fa-search fa-sm" style="color: #f88c05"></i>
              </div>
              <input type="text" placeholder="Cari menu..." class="text-xs outline-none" />
            </div>

            <div>
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0bfs39SfGEX262PHmiU2eRQjOHZSfIST7bYfyJWewVw&s"
                alt="search"
                width="14"
                height="14"
              />
            </div>
          </div>
        </section>
      </header>

      <main class="h-auto w-full rounded-t-3xl bg-white p-2">
        <section class="flex flex-col gap-3 p-2">
          <p class="text-sm font-bold">Kategori Menu</p>

          <div class="flex justify-between px-6">
            <x-category>
              <x-slot:icon>fa-solid fa-utensils</x-slot>
              <x-slot:name>All</x-slot>
            </x-category>

            <x-category>
              <x-slot:icon>fa-solid fa-bowl-food</x-slot>
              <x-slot:name>Makanan</x-slot>
            </x-category>

            <x-category>
              <x-slot:icon>fa-solid fa-wine-glass</x-slot>
              <x-slot:name>Minuman</x-slot>
            </x-category>

            <x-category>
              <x-slot:icon>fa-solid fa-cookie-bite</x-slot>
              <x-slot:name>Snack</x-slot>
            </x-category>
          </div>
        </section>

        <section class="flex max-h-[62.5vh] flex-wrap justify-between overflow-y-auto">
          <x-card-menu />
          <x-card-menu />
          <x-card-menu />
          <x-card-menu />
          <x-card-menu />
          <x-card-menu />
        </section>
      </main>
    </div>
  </x-slot>
</x-layouts.app>