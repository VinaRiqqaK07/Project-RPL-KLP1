<x-layouts.app>
  <x-slot:slot>
    <div class="h-full">
      <header class="sticky top-0 flex h-16 w-full items-center justify-between bg-orange-500 px-4">
        <a href="/order">
          <i class="fa-solid fa-arrow-left fa-lg text-white"></i>
        </a>
        <h1 class="mx-auto text-xl font-bold text-white">Keranjang</h1>
        @if (empty($list_pesanan))
          <i class="fa-solid fa-arrow-rotate-left fa-lg hidden text-white"></i>
        @else
          <button id="deleteAll" type="submit">
            <i class="fa-solid fa-arrow-rotate-left fa-lg text-white"></i>
          </button>
        @endif
      </header>

      <main class="h-full w-full bg-gray-100">
        @if (empty($list_pesanan))
          <x-empty-cart></x-empty-cart>
        @else
          <section class="max-h-full overflow-y-auto px-2 pb-4 pt-1">
            @foreach ($list_pesanan as $pesanan)
              <x-card-order>
                <x-slot:name>{{ $pesanan["name"] }}</x-slot>
                <x-slot:price>{{ $pesanan["price"] }}</x-slot>
                <x-slot:qty>{{ $pesanan["qty"] }}</x-slot>
                <x-slot:image>{{ $pesanan["image"] }}</x-slot>
                <x-slot:note>{{ $pesanan["note"] }}</x-slot>
              </x-card-order>
            @endforeach

            <x-card-order></x-card-order>
            <x-card-order></x-card-order>
          </section>
        @endif
      </main>
      @if (! empty($list_pesanan))
        <footer class="fixed bottom-0 w-[400px] bg-white p-4" height="60">
          <section class="flex flex-row items-center justify-between">
            <section class="flex flex-col">
              <p class="text-sm">Jumlah bayar</p>
              <p class="text-sm font-bold">Rp{{ $sumprice ?? 200000 }}</p>
            </section>
            <section class="">
              <button id="showModal" class="text-md w-40 rounded-lg bg-[#70B44E] px-4 py-2 font-semibold text-white">
                Pesan
              </button>
            </section>
          </section>
          <div id="modalBackdrop" class="fixed left-0 top-0 z-50 hidden h-full w-full bg-gray-500 bg-opacity-50"></div>
        </footer>
      @endif

      <div id="deleteModal" class="hidden">
        <x-delete-modal></x-delete-modal>
      </div>

      <div id="modalSheet" class="hidden">
        <x-make-order-modal></x-make-order-modal>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        var showModalButton = document.getElementById('showModal');
        var closeModalButton = document.getElementById('closeModal');
        var modalBackdrop = document.getElementById('modalBackdrop');
        var modalSheet = document.getElementById('modalSheet');

        var showDeleteButton = document.getElementById('deleteButton');
        var deleteModal = document.getElementById('deleteModal');
        var closeDeleteButton = document.getElementById('closeDelete');

        showModalButton.addEventListener('click', () => {
          modalBackdrop.classList.remove('hidden');
          modalSheet.classList.remove('hidden');
        });
        closeModalButton.addEventListener('click', () => {
          modalSheet.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
        });

        showDeleteButton.addEventListener('click', () => {
          deleteModal.classList.remove('hidden');
          modalBackdrop.classList.remove('hidden');
        });
        closeDeleteButton.addEventListener('click', () => {
          deleteModal.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
        });
      });
    </script>
  </x-slot>
</x-layouts.app>
