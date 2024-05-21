<x-layouts.app>
  <x-slot:slot>
    <div class="h-full">
      <header class="sticky top-0 flex h-[72px] w-full items-center justify-between bg-orange-500 px-5">
        <section class="flex flex-row gap-4">
          <img
            src="https://p1.hiclipart.com/preview/249/454/412/frost-pro-for-os-x-icon-set-now-free-blank-white-circle-png-clipart.jpg"
            alt="logo"
            width="25"
            height="25"
          />
          <section>
            <h1 class="font-semibold text-white sm:text-sm">Rumah Makan</h1>
            <p class="text-sm text-white">Pare-Pare</p>
          </section>
        </section>
        <section
          class="flex h-8 w-[150px] items-center justify-between rounded-lg bg-white px-4 py-6 sm:w-[120px] md:w-[300px] lg:w-[600px] xl:w-[800px]"
        >
          <div class="flex items-center gap-4">
            <div>
              <i class="fa fa-search fa-sm"></i>
            </div>
            <input type="text" placeholder="Cari menu..." class="text-sm outline-none" />
          </div>
        </section>
        <section class="flex flex-row items-center justify-center gap-3">
          <button class="flex flex-col items-center gap-0.5">
            <i class="fa fa-clipboard-list fa-md text-white"></i>
            <p class="text-sm text-white">Orders</p>
          </button>
          <button class="flex flex-col items-center gap-0.5">
            <i class="fa fa-gear fa-md text-white"></i>
            <p class="text-sm text-white">Settings</p>
          </button>
          <button class="flex flex-col items-center gap-0.5">
            <i class="fa fa-right-from-bracket fa-md text-white"></i>
            <p class="text-sm text-white">Logout</p>
          </button>
        </section>
      </header>
      <main class="flex flex-row">
        <section>
          <section class="sticky top-[72px] flex flex-auto gap-6 bg-white px-6 py-4">
            <x-employee-components.category-employee></x-employee-components.category-employee>
            <x-employee-components.category-employee>
              <x-slot:active>false</x-slot>
              <x-slot:icon>fa-solid fa-bowl-food</x-slot>
              <x-slot:name>Food</x-slot>
            </x-employee-components.category-employee>
            <x-employee-components.category-employee>
              <x-slot:active>false</x-slot>
              <x-slot:icon>fa-solid fa-mug-saucer</x-slot>
              <x-slot:name>Drink</x-slot>
            </x-employee-components.category-employee>
            <x-employee-components.category-employee>
              <x-slot:active>false</x-slot>
              <x-slot:icon>fa-solid fa-burger</x-slot>
              <x-slot:name>Snack</x-slot>
            </x-employee-components.category-employee>
          </section>
          <section class="mt-4 flex flex-wrap justify-between px-1.5">
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
            <x-card-menu></x-card-menu>
          </section>
        </section>
        <aside class="sticky top-[88px] mb-4 me-6 mt-4 h-[84vh] w-[190vh] overflow-y-auto rounded-xl bg-[#F6FFF2] pt-4">
          <section class="flex items-center justify-between px-6">
            <h1 class="text-lg font-semibold">Create Order</h1>
            <i class="fa-solid fa-xmark hidden text-xl font-semibold"></i>
          </section>
          <section class="mt-4 flex flex-col gap-2 px-6">
            <x-card-order></x-card-order>
            <x-card-order></x-card-order>
            <x-card-order></x-card-order>
            <x-card-order></x-card-order>
          </section>
          <section
            class="sticky bottom-0 left-0 mx-1 mb-1 mt-4 flex flex-col rounded-xl bg-white px-6 py-2 shadow-sm shadow-gray-500"
          >
            <section class="flex items-center justify-between">
              <p class="text-md font-semibold">Sub Total (n item):</p>
              <p class="text-md font-semibold">Rp{{ $price ?? number_format(1000000) }}</p>
            </section>
            <button id="openTransactionDetail" class="mb-2 mt-4 rounded-xl bg-green-500 px-4 py-1.5">
              <p class="font-semibold text-white">Continue</p>
            </button>
          </section>
        </aside>
        <div
          id="transactionDetailBackdrop"
          class="fixed left-0 top-0 hidden h-full w-full bg-gray-500 bg-opacity-50"
        ></div>
      </main>

      <div id="transactionDetail" class="hidden">
        <x-employee-components.transaction-modal></x-employee-components.transaction-modal>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        var openTransactionButton = document.getElementById('openTransactionDetail');
        var transactionModalBackdrop = document.getElementById('transactionDetailBackdrop');
        var transactionModal = document.getElementById('transactionDetail');
        var closeTransaction = document.getElementById('closeTransactionModal');

        openTransactionButton.addEventListener('click', () => {
          transactionModal.classList.remove('hidden');
          transactionModalBackdrop.classList.remove('hidden');
        });

        closeTransaction.addEventListener('click', () => {
          transactionModal.classList.add('hidden');
          transactionModalBackdrop.classList.add('hidden');
        });
      });
    </script>
  </x-slot>
</x-layouts.app>
