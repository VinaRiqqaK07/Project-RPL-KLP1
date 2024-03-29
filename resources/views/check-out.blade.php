<x-layouts.app>
    <x-slot:slot>
        <div class="h-full">
            <header class="w-full h-16 flex items-center justify-between bg-orange-500 px-4">
                <i class="fa-solid fa-arrow-left fa-lg text-white" ></i>
                <h1 class="font-bold text-white text-xl">Keranjang</h1>
                <i class="fa-solid fa-arrow-rotate-left fa-lg text-white"></i>
            </header>
            <main class="h-auto w-full pb-9 lg:pb-10 mb-12" >
                <section class="max-h-[83vh] sm:max-h-[85vh] lg:max-h-[80vh] xl:max-h-[90vh] bg-gray-100 overflow-y-auto">
                    <x-card-order></x-card-order>
                    <x-card-order></x-card-order>
                    <x-card-order></x-card-order>
                    <x-card-order></x-card-order>
                    <x-card-order></x-card-order>
                </section>
            </main>
            <footer class="p-4 fixed bottom-0 left-0 w-full bg-white" height="60">
                <section class="flex flex-row justify-between items-center" >
                    <section class="flex flex-col">
                        <p class="text-sm">Jumlah bayar</p>
                        <p class="text-sm font-bold" >Rp{{ $sumprice ?? 200000 }}</p>
                    </section>
                    <section class="">
                        <button id="showModal" class="w-40 py-2 px-4 text-white text-md font-semibold bg-[#70B44E] rounded-lg" >Pesan</button>
                    </section>
                </section>
                <div id="modalBackdrop" class="hidden fixed top-0 left-0 w-full h-full bg-gray-500 bg-opacity-50 z-50"></div>
            </footer>
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

