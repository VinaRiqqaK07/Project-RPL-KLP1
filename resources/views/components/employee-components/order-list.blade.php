<section class="fixed right-0 top-[60px] mb-4 me-6 mt-4 h-[84vh] w-[55vh] overflow-y-auto rounded-xl bg-[#F6FFF2] pt-4">
  <section class="px-6">
    <section class="flex items-center justify-between">
      <h1 class="text-lg font-semibold">Order List</h1>
      <button>
        <i id="closeOrderList" class="fa-solid fa-xmark text-xl font-semibold"></i>
      </button>
    </section>
    <p>Displaying today list order</p>
    <section class="flex gap-3 py-1">
        <x-employee-components.category-employee>
          <x-slot:active>true</x-slot>
          <x-slot:icon>fa-regular fa-circle-check</x-slot>
          <x-slot:name>In Progress</x-slot>
        </x-employee-components.category-employee>
        <x-employee-components.category-employee>
          <x-slot:active>false</x-slot>
          <x-slot:icon>fa-solid fa-circle-check</x-slot>
          <x-slot:name>Completed</x-slot>
        </x-employee-components.category-employee>
    </section>
    @foreach ($orderList as $orderId => $order)
        <x-employee-components.order-item>
            <x-slot:customer_name>{{ $order['customer_name'] }}</x-slot>
            <x-slot:table_number>{{ $order['table_number'] }}</x-slot>
        </x-employee-components.order-item>
    @endforeach
    <x-employee-components.order-item></x-employee-components.order-item>
  </section>
</section>
