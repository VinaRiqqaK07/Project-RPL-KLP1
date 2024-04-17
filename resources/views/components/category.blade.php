@props(["active" => false])

<section class="flex flex-col items-center gap-1">
  <div class="{{ $active ? "bg-red-500" : "bg-[#D9D9D9]" }} flex h-6 w-6 items-center justify-center rounded-full p-4">
    <i class="{{ $icon }}"></i>
  </div>

  <p class="text-xs font-semibold">{{ $name }}</p>
</section>
