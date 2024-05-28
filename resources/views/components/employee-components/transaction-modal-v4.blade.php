<div class="h-full">
  <section class="h-full w-full">
    <footer class="fixed bottom-0 left-0 h-auto w-full rounded-t-xl bg-slate-50 p-4">
      <section class="mb-4 mt-1 flex flex-row items-center justify-between">
        <p class="text-xl font-bold">Transaction Detail</p>
        <button id="closeTransactionModal"><i class="fa-solid fa-circle-xmark fa-xl"></i></button>
      </section>
      <section class="flex pe-1">
        <section class="font-medium" style="width: 50%">
          <p class="mb-1">Order Detail :</p>
          <section class="flex gap-3 py-1">
            <x-employee-components.category-employee>
              <x-slot:active>true</x-slot>
              <x-slot:icon>fa-solid fa-utensils</x-slot>
              <x-slot:name>Dine-In</x-slot>
            </x-employee-components.category-employee>
            <x-employee-components.category-employee>
              <x-slot:active>false</x-slot>
              <x-slot:icon>fa-solid fa-box</x-slot>
              <x-slot:name>Take Away</x-slot>
            </x-employee-components.category-employee>
          </section>
          <section class="py-1">
            <label class="my-1 font-medium">Customer Name</label>
            <input
              type="text"
              placeholder="Type customer name"
              class="rounded-lg bg-slate-100 px-2 py-1 focus:border-blue-300 focus:outline-none focus:ring"
            />
          </section>
          <section class="py-1">
            <label>Menu selected (2 items)</label>
            <section class="flex justify-between pe-1">
              <section class="flex gap-2">
                <p class="font-thin">nx</p>
                <p>NASI GORENG</p>
              </section>
              <section>
                <p>Rp3.000.000,00</p>
              </section>
            </section>
            <section class="flex justify-between pe-1">
              <section class="flex gap-2">
                <p class="font-thin">nx</p>
                <p>NASI LAIN</p>
              </section>
              <section>
                <p>Rp200.00</p>
              </section>
            </section>
          </section>
        </section>
        <section class="px-2 font-medium" style="width: 50%">
          <p>Payment Detail</p>
          <section class="flex gap-3 py-1">
            <x-employee-components.category-employee>
              <x-slot:active>false</x-slot>
              <x-slot:icon>fa-solid fa-money-bill-wave</x-slot>
              <x-slot:name>Cash</x-slot>
            </x-employee-components.category-employee>
            <x-employee-components.category-employee>
              <x-slot:active>true</x-slot>
              <x-slot:icon>fa-solid fa-wallet</x-slot>
              <x-slot:name>E-Wallet</x-slot>
            </x-employee-components.category-employee>
          </section>
          <section>
            <p class="text-sm">Quick Access</p>
            <section class="flex gap-3 py-1">
              <button class="rounded-lg bg-slate-200 px-2 py-1">50.000</button>
              <button class="rounded-lg bg-slate-200 px-2 py-1">100.000</button>
            </section>
          </section>
          <section class="flex">
            <section class="flex flex-col py-1 pe-1" style="width: 50%">
              <label class="my-1 font-medium">VAT</label>
              <input
                type="text"
                placeholder="Type VAT"
                class="rounded-lg bg-slate-100 px-2 py-1 focus:border-blue-300 focus:outline-none focus:ring"
              />
            </section>
          </section>
          <section class="flex flex-col gap-1 py-2">
            <section class="flex justify-between">
              <p class="text-sm">Sub Total</p>
              <p class="text-sm">Rp3.200.000,00</p>
            </section>
            <section class="flex justify-between">
              <p class="text-sm">Discount</p>
              <p class="text-sm">50%</p>
            </section>
            <section class="flex justify-between">
              <p>Total</p>
              <p>Rp1.600.000,00</p>
            </section>
            <button class="text-md mt-4 w-full rounded-lg bg-[#70B44E] px-1 py-2 font-semibold text-white">Pay</button>
            <button class="text-md mt-2 w-full rounded-lg bg-gray-200 px-1 py-2 font-semibold text-black">
              Save Order
            </button>
          </section>
        </section>
      </section>
    </footer>
  </section>
</div>
