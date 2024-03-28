<section class="flex w-fit flex-col gap-3 bg-[#F3F3F3] px-2 py-4 my-2 mx-4 rounded-lg">
  <img
    src="https://www.bifolcomatty.co.uk/wp-content/uploads/2019/08/placeholder-square.jpg"
    alt=""
    class="h-20 w-32 rounded-xl object-cover"
  />

  <div class="max-w-32">
    <h5 class="text-sm">{{ $name ?? "Nama Menu" }}</h5>
    <p class="line-clamp-2 text-[10px]">
      {{ $description ?? "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consectetur quas saepe ullam non facilis adipisci nesciunt ex officiis nihil." }}
    </p>
  </div>

  <p class="text-sm font-semibold">{{ $price ?? "Rp.20.000" }}</p>
</section>