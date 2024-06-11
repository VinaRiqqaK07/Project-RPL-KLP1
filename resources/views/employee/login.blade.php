<x-layouts.app>
  <x-slot:slot>
  <div class="flex h-screen w-full items-center justify-center">
    <section class="flex w-1/3 flex-col gap-6 rounded-2xl bg-white p-10 shadow-lg">
      <h1 class="text-center text-2xl font-bold">Login</h1>

      <div>
        <section class="flex flex-col gap-2">
          <label class="text-lg font-bold">
            Username
            <span class="text-red-500">*</span>
          </label>
          <input type="text" class="w-full rounded-xl border border-gray-400 p-3 outline-none" />
        </section>
      </div>

      <div>
        <section class="flex flex-col gap-2">
          <label class="text-lg font-bold">
            Password
            <span class="text-red-500">*</span>
          </label>
          <input type="password" class="w-full rounded-xl border border-gray-400 p-3 outline-none" />
        </section>
      </div>

      <div class="flex items-center">
        <input type="checkbox" id="rememberMe" class="mr-2" />
        <label for="rememberMe">Remember me</label>
      </div>

      <button class="mt-4 w-full rounded-xl bg-sunset-orange py-3 font-bold text-white">Login</button>
    </section>
  </div>
  </x-slot>
</x-layouts.app>
