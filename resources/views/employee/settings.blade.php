<x-layouts.app>
  <x-slot:slot>
    <div class="flex h-screen w-full flex-col">
      <!-- Navbar -->
      <nav class="flex items-center justify-between bg-orange-500 p-4">
        <div class="flex items-center">
          <i class="fas fa-utensils text-white text-xl mr-2"></i>
          <span class="text-white text-xl font-bold">Rumah Makan Pare-Pare</span>
        </div>
        <div class="flex items-center justify-center flex-grow">
          <input type="text" placeholder="Cari menu..." class="rounded-xl p-2 outline-none w-1/2" />
        </div>
        <div class="flex items-center gap-8">
          <a href="#" class="text-white flex flex-col items-center">
            <i class="fas fa-receipt mb-1"></i> Orders
          </a>
          <a href="#" class="text-white flex flex-col items-center active">
            <i class="fas fa-cog mb-1"></i> Settings
          </a>
          <a href="#" class="text-white flex flex-col items-center">
            <i class="fas fa-sign-out-alt mb-1"></i> Logout
          </a>
        </div>
      </nav>

      <!-- Content -->
      <div class="flex flex-grow items-center justify-center">
        <section class="flex w-2/3 flex-col gap-6 rounded-2xl bg-white p-10 shadow-lg relative">
          <!-- Icon Close -->
          <i class="fas fa-times absolute top-4 right-4 cursor-pointer"></i>
          <div class="flex">
            <div class="w-1/2">
              <h1 class="text-left text-2xl font-bold">Account Settings</h1>
              <p class="text-left">Ubah informasi akun kamu di sini</p>
            </div>
            <div class="w-1/2">
              <div class="mb-4">
                <label class="text-lg font-bold block">
                  Employee Name
                  <span class="text-red-500">*</span>
                </label>
                <input type="text" name="employee_name" value="Ruthveralda" class="w-full rounded-xl border border-gray-400 p-3 outline-none" required />
              </div>

              <div class="mb-4">
                <label class="text-lg font-bold block">
                  Email
                  <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" value="ruthveralda@gmail.com" class="w-full rounded-xl border border-gray-400 p-3 outline-none" required />
              </div>

              <div class="mb-4">
                <label class="text-lg font-bold block">
                  Old Password
                  <span class="text-red-500">*</span>
                </label>
                <input type="password" name="old_password" class="w-full rounded-xl border border-gray-400 p-3 outline-none" required />
              </div>

              <div class="mb-4">
                <label class="text-lg font-bold block">
                  New Password
                  <span class="text-red-500">*</span>
                </label>
                <input type="password" name="new_password" class="w-full rounded-xl border border-gray-400 p-3 outline-none" required />
              </div>

              <div class="mb-4">
                <label class="text-lg font-bold block">
                  Retype New Password
                  <span class="text-red-500">*</span>
                </label>
                <input type="password" name="retype_password" class="w-full rounded-xl border border-gray-400 p-3 outline-none" required />
              </div>

              <button type="submit" class="mt-4 w-full rounded-xl bg-green-500 py-3 font-bold text-white">Save Changes</button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </x-slot>
</x-layouts.app>

<!-- Include Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
