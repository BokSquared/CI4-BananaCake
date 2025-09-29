<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Board</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
         background: linear-gradient(to right, rgba(224, 159, 62, 0.9), rgba(158, 42, 43, 0.9));
    }
</style>
</head>
<body class="font-sans">
  <?= view('components/header') ?>
  <div class="max-w-7xl mx-auto py-12 px-6 grid md:grid-cols-2 gap-8">
    <div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center">
        <h2 class="text-xl font-semibold tracking-wide text-gray-700">WYBIE’S</h2>
        <p class="tracking-[0.6em] uppercase text-sm text-gray-500 mb-6">Palette</p>
    <div class="flex gap-4 mb-8">
        <div class="h-8 w-16 rounded-full bg-[#E09F3E]"></div> 
        <div class="h-8 w-16 rounded-full bg-[#9E2A2B]"></div> 
        <div class="h-8 w-16 rounded-full bg-[#FFF3B0]"></div> 
        <div class="h-8 w-16 rounded-full bg-[#333333]"></div> 
    </div>
    <div class="grid grid-cols-2 gap-2 mb-8">
        <img src="https://hips.hearstapps.com/hmg-prod/images/banana-cake-vertical-2-668d5778abfc2.jpg?resize=768:*" class="rounded-lg object-cover h-24 w-full">
        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/10/Banana-Wallpaper-Full-HD.jpg" class="rounded-lg object-cover h-24 w-full">
        <img src="https://images.immediate.co.uk/production/volatile/sites/30/2024/01/Sesame-chocolate-and-banana-toast-3a87128.jpg?quality=90&webp=true&resize=700,636" class="rounded-lg object-cover h-24 w-full">
        <img src="https://www.thespruceeats.com/thmb/rRgACcJGrtpYOhAAkA4n-Ovsyi0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/perfect-banana-split-recipe-305712-hero-01-ef0482a539394da0b5ba64ade0c73b98.jpg" class="rounded-lg object-cover h-24 w-full">
    </div>
    <div class="w-full h-40 flex flex-row gap-x-3">
        <div class="flex-1 rounded-l-lg bg-[#E09F3E]"></div>
        <div class="flex-1 bg-[#9E2A2B]"></div>
        <div class="flex-1 bg-[#FFF3B0]"></div>
        <div class="flex-1 rounded-r-lg bg-[#333333]"></div>
    </div>
</div>

<div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center">
    <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-6">BRAND VIBE</h2>
    <div class="grid grid-cols-4 gap-2 mb-8">
        <div class="h-60 w-full rounded-2xl bg-[#E09F3E] flex items-center justify-center text-[#AF4B41] font-bold text-2xl shadow-md">🍌</div>
        <div class="h-60 w-full rounded-2xl bg-[#9E2A2B] flex items-center justify-center text-[#FFD369] font-bold text-2xl shadow-md">🎂</div>
        <div class="grid grid-cols-2 gap-2 w-full col-span-2">
            <img src="https://www.shutterstock.com/image-photo/assorted-pastry-bread-arranged-on-600nw-2169704423.jpg" 
            class="rounded-lg object-cover h-24 w-full">
            <img src="https://www.thespruceeats.com/thmb/JFnuCS7F3h_DKFXEhKNf0lzBGtM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mille-feuille-homemade-napoleon-recipe-2394442-hero-01-aa2f20cd8a0f464ebfbe059927007b10.jpg" 
            class="rounded-lg object-cover h-24 w-full">
            <img src="https://images.unsplash.com/photo-1574376407492-c3cf78231def?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
            class="rounded-lg object-cover h-24 w-full">
            <img src="https://www.momontimeout.com/wp-content/uploads/2021/07/banana-split-sundae.jpeg" 
            class="rounded-lg object-cover h-24 w-full">
        </div>
    </div>
    <div class="relative w-full">
        <img src="https://elements-resized.envatousercontent.com/elements-cover-images/6ea6ee35-8ef1-4465-8b54-90cd1a3842af?w=433&cf_fit=scale-down&q=85&format=auto&s=c2dd69645b281f3941079064749c1182d550aed1344045a80918d303076b8e16" 
            class="rounded-lg object-cover w-full h-40">
        <img src="https://img.freepik.com/free-vector/banana-fruit-floating-cartoon-vector-icon-illustration-food-fruit-icon-concept-isolated-flat-vector_138676-9922.jpg" 
            class="absolute -bottom-10 left-0 h-24 w-24 rounded-lg object-cover shadow-lg -translate-x-4">
    </div>
</div>

<div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center space-y-6">
  <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-1">Typography Showcase</h2>
  <h5 class="text-left text-gray-400 font-medium mb-1">Heading font</h5>
    <p class="text-3xl font-extrabold text-[#AF4B41] mb-2" style="font-family: 'Playfair Display', serif;">Playfair Display</p>
    <h5 class="text-left text-gray-400 font-medium mb-1">Body font</h5>
    <p class="text-2xl font-semibold text-[#FFD369] mb-2" style="font-family: 'Lato', sans-serif;">Lato</p>
    <p class="text-gray-600 text-sm mb-4">Elegant, friendly, and modern fonts for a cozy bakery vibe.</p>
</div>

<div class="bg-white shadow-lg rounded-xl p-8 flex flex-col items-center text-center space-y-6">
  <h2 class="text-xl font-semibold tracking-wide text-gray-700 mb-1">Buttons</h2>
    <h5 class="text-left text-gray-400 font-medium mb-1">Light mode</h5>
    <div class="flex gap-4 mb-6">
        <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#']); ?>
        <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']); ?>
        <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']); ?>
        <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
    </div>
    <h5 class="text-left text-gray-400 font-medium mb-1">Dark mode</h5>
    <div class="bg-[#333333] p-6 rounded-xl flex gap-4 mb-6">
        <?= view('components/buttons/button_primary', ['label' => 'Primary', 'href' => '#', 'dark' => true, 'disable' => false]) ?>
        <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']) ?>
        <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']) ?>
        <?= view('components/buttons/button_primary', ['label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
    </div>
</div>
</div>
<div class="max-w-7xl mx-auto px-6">
  <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center mb-8">
    <h2 class="text-2xl font-semibold tracking-wide text-gray-700">Card Samples</h2>
  </div>
  <div class="grid md:grid-cols-3 gap-6 mb-12">
    <div class="bg-white border rounded-xl p-6 shadow-lg flex flex-col justify-between">
      <h3 class="font-bold text-lg mb-2 text-[#AF4B41]">Supreme!</h3>
      <p class="text-gray-500 mb-4">More banana cake dishes to be discovered.</p>
      <a href="#" class="text-blue-500 text-sm mt-auto">Read more</a>
    </div>
    <div class="bg-white border rounded-xl p-6 shadow-lg flex flex-col justify-between">
      <h3 class="font-bold text-lg mb-2 text-[#AF4B41]">Subscribe to our Patrons!</h3>
      <p class="text-gray-500 mb-4">Taste our experiments with different kinds of bananas.</p>
      <a href="#" class="text-blue-500 text-sm mt-auto">Read more</a>
    </div>
    <div class="bg-white border rounded-xl p-6 shadow-lg flex flex-col justify-between">
      <h3 class="font-bold text-lg mb-4 text-[#AF4B41] break-words">
        "Life is full of bananas—sometimes sweet, sometimes a little mushy, but always worth peeling."
      </h3>
      <a href="#" class="text-blue-500 text-sm mt-auto">Read more</a>
    </div>
  </div>

  <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center mb-8">
    <h2 class="text-2xl font-semibold tracking-wide text-gray-700">Logos</h2>
  </div>
  <div class="grid md:grid-cols-2 gap-8 mb-12">
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center">
      <h3 class="font-semibold text-lg text-gray-700 mb-4">Banana - Circle</h3>
      <div class="w-32 h-32 flex items-center justify-center mb-4">
        <img src="https://static.vecteezy.com/system/resources/previews/045/952/907/non_2x/illustration-of-a-tempting-banana-cake-icon-great-for-bakery-logos-or-dessert-menus-vector.jpg"
             class="rounded-full object-cover w-full h-full border-4 border-[#FFD369]">
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col items-center text-center">
      <h3 class="font-semibold text-lg text-gray-700 mb-4">Banana - Square</h3>
      <div class="w-32 h-32 flex items-center justify-center mb-4">
        <img src="https://static.vecteezy.com/system/resources/previews/045/952/907/non_2x/illustration-of-a-tempting-banana-cake-icon-great-for-bakery-logos-or-dessert-menus-vector.jpg"
             class="rounded-xl object-cover w-full h-full border-4 border-[#FFD369]">
      </div>
    </div>
  </div>
</div>
<?= view('components/footer') ?>
</body>
</html>
