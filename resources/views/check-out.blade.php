<x-layouts.app>
  <x-slot:slot>
    <div class="relative mx-auto min-h-dvh w-[400px]">
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

      <main class="max-h-full w-full bg-gray-100 pb-8">
        @if (empty($list_pesanan))
          <x-empty-cart></x-empty-cart>
        @else
          <section class="overflow-y-auto px-2 pb-4 pt-1">
            @foreach ($list_pesanan as $menuId => $pesanan)
              <x-card-order>
                <x-slot:id>{{ $menuId }}</x-slot>
                <x-slot:name>{{ $pesanan["name"] }}</x-slot>
                <x-slot:price>
                  Rp{{ number_format($pesanan["price"], 2, ",", ".") }}
                </x-slot>
                <x-slot:qty>{{ $pesanan["qty"] }}</x-slot>
              </x-card-order>
            @endforeach
          </section>
        @endif
      </main>
      @if (! empty($list_pesanan))
        <footer class="fixed bottom-0 w-[400px] bg-white p-4" height="60">
          <section class="flex flex-row items-center justify-between">
            <section class="flex flex-col">
              <p class="text-sm">Jumlah bayar</p>
              <p class="text-sm font-bold">Rp{{ number_format($sumprice ?? 0, 2, ",", ".") }}</p>
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

      <div id="deleteAllModal" class="hidden">
        <x-delete-all-modal></x-delete-all-modal>
      </div>

      <div id="modalSheet" class="hidden">
        <x-make-order-modal></x-make-order-modal>
      </div>
    </div>

    <script>
      let menuIdToDelete;
      let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

      function removeFromCart(menuId) {
        console.log('ada??', menuId);
        menuIdToDelete = menuId;
        deleteModal.classList.remove('hidden');
        modalBackdrop.classList.remove('hidden');
      }

      document.addEventListener('DOMContentLoaded', () => {
        var showModalButton = document.getElementById('showModal');
        var closeModalButton = document.getElementById('closeModal');
        var modalBackdrop = document.getElementById('modalBackdrop');
        var modalSheet = document.getElementById('modalSheet');

        var showDeleteButton = document.getElementById('deleteButton');
        var deleteModal = document.getElementById('deleteModal');
        var closeDeleteButton = document.getElementById('closeDelete');
        var deleteItemButton = document.getElementById('deleteThisItem');

        var deleteAllButton = document.getElementById('deleteAll');
        var deleteAllModal = document.getElementById('deleteAllModal');
        var closeDeleteAll = document.getElementById('closeDeleteAll');
        var deleteAllItem = document.getElementById('deleteAllItem');

        showModalButton.addEventListener('click', () => {
          modalBackdrop.classList.remove('hidden');
          modalSheet.classList.remove('hidden');
        });
        closeModalButton.addEventListener('click', () => {
          modalSheet.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
        });
        /*
        showDeleteButton.addEventListener('click', () => {
          deleteModal.classList.remove('hidden');
          modalBackdrop.classList.remove('hidden');
        });*/

        closeDeleteButton.addEventListener('click', () => {
          deleteModal.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
        });

        deleteItemButton.addEventListener('click', () => {
          console.log('masuk?');
          fetch(`/order/remove/${menuIdToDelete}`, {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': csrfToken,
              'Content-Type': 'application/json',
              Accept: 'application/json',
            },
          })
            .then((response) => {
              if (response.ok) {
                console.log('berhasil?? ', response);
                window.location.reload();
                //window.location.href = '/order/checkout';
              } else {
                console.log('gagal :(');
              }
            })
            .catch((error) => {
              console.error('error: ', error);
            });
        });

        deleteAllButton.addEventListener('click', () => {
          deleteAllModal.classList.remove('hidden');
          modalBackdrop.classList.remove('hidden');
        });
        closeDeleteAll.addEventListener('click', () => {
          deleteAllModal.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
        });
        deleteAllItem.addEventListener('click', (event) => {
          event.preventDefault();

          fetch('/order/clear', {
            method: 'DELETE',
            headers: {
              'X-CSRF-TOKEN': csrfToken,
              'Content-Type': 'application/json',
              Accept: 'application/json',
            },
          })
            .then((response) => {
              if (response.ok) {
                console.log('berhasil hapus semua: ', response);
                window.location.reload();
              } else {
                console.log('gagal hapus semua');
              }
            })
            .catch((error) => {
              console.error('error delete all: ', error);
            });
        });
      });
    </script>
  </x-slot>
</x-layouts.app>
