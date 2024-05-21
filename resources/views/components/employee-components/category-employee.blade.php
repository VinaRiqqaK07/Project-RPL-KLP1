<section class="flex items-start gap-1">
  <div
    class="{{ $active = false ? "bg-amber-200" : "bg-[#D9D9D9]" }} flex items-center justify-between gap-2 rounded-lg px-3 py-2"
  >
    <i class="{{ $icon ?? "fa-solid fa-utensils" }}"></i>
    <p class="text-xs font-semibold">{{ $name ?? "Semua" }}</p>
  </div>
</section>
