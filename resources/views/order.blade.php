@php
  $category = "All";
@endphp

<x-layouts.app>
  <x-slot:slot>
    <div class="relative mx-auto h-full w-[400px] bg-sunset-orange">
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

            <a href="/order/checkout">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </div>
        </section>
      </header>

      <main class="h-auto w-full rounded-t-3xl bg-white p-2">
        <section class="flex flex-col gap-3 p-2">
          <p class="text-sm font-bold">Kategori Menu</p>

          <div class="flex justify-between px-6">
            <x-category :active="$category == 'All'">
              <x-slot:icon>fa-solid fa-utensils</x-slot>
              <x-slot:name>All</x-slot>
            </x-category>

            <x-category :active="$category == 'Makanan'">
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
          @if (! empty($menus))
            @foreach ($menus as $menu)
              <div onclick="showMenuDetails({{ $menu->id }})">
                <x-card-menu>
                  <x-slot:id>{{ $menu->id }}</x-slot>
                  <x-slot:name>{{ $menu->name }}</x-slot>
                  <x-slot:description>{{ $menu->description }}</x-slot>
                  <x-slot:price>Rp {{ number_format($menu->price, 2, ",", ".") }}</x-slot>
                </x-card-menu>
              </div>
            @endforeach
          @else
            <!--Set Menu kosong bagaimana-->
            <div></div>
          @endif
        </section>

        <div id="modalBackdrop" class="fixed left-0 top-0 hidden h-full w-full bg-gray-500 bg-opacity-50"></div>
      </main>

      <div id="menuDetail" class="z-50 hidden">
        <x-menu-detail>
          <x-slot:name>{{ $menu->name }}</x-slot>
        </x-menu-detail>
      </div>

      <div id="toast" class="z-50 hidden">
        <x-toast />
      </div>
    </div>

    <script>
      function showMenuDetails(menuId) {
        console.log('Fetching ID :', menuId);
        fetch(`/order/${menuId}`)
          .then((response) => response.json())
          .then((data) => {
            console.log('Data received', data);
            document.getElementById('menuID').value = data.id;
            document.getElementById('menuName').innerText = data.name;
            document.getElementById('menuPrice').innerText = data.price
              .toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 })
              .replace('IDR', '')
              .trim();
            document.getElementById('menuDescription').innerText = data.description;
            if (data.image != null) {
              document.getElementById('menuImage').src = data.image;
            }
            modalBackdrop.classList.remove('hidden');
            menuDetail.classList.remove('hidden');
          })
          .catch((error) => console.error('Error fetching menu details:', error));
      }

      document.addEventListener('DOMContentLoaded', () => {
        var modalBackdrop = document.getElementById('modalBackdrop');
        var menuDetail = document.getElementById('menuDetail');
        var closeMenuDetailButton = document.getElementById('closeMenuDetail');

        var showToastButton = document.getElementById('showToast');
        var toast = document.getElementById('toast');
        var closeToast = document.getElementById('closeToast');

        /*
        var showMenuDetailButton = document.querySelectorAll('.menu-card');
        showMenuDetailButton.forEach(card => {
            card.addEventListener('click', () => {
              const menuId = this.id.replace('showMenuDetail-', '');
              console.log('Menu Id: ', menuId);
              showMenuDetails(menuId);
            });
          });
*/
        closeMenuDetailButton.addEventListener('click', () => {
          menuDetail.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
        });

        showToastButton.addEventListener('click', () => {
          menuDetail.classList.add('hidden');
          modalBackdrop.classList.add('hidden');
          toast.classList.remove('hidden');
          setTimeout(() => {
            toast.classList.add('hidden');
          }, 2000);
        });

        closeToast.addEventListener('click', () => {
          toast.classList.add('hidden');
        });
      });
    </script>
  </x-slot>
</x-layouts.app>
