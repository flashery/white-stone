<div class="min-h-screen bg-[#F9F5F0] flex items-center justify-center p-8">
  <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-6xl grid grid-cols-1 md:grid-cols-2">
    <!-- Contact Form -->
    <div class="p-8">
      <h2 class="text-3xl font-bold text-[#2F2E41] mb-6">Get In Touch</h2>
      <form class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" placeholder="First Name*" class="w-full p-4 bg-[#F5F2EE] rounded-lg outline-none focus:ring-2 focus:ring-indigo-500">
          <input type="text" placeholder="Last Name*" class="w-full p-4 bg-[#F5F2EE] rounded-lg outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <input type="email" placeholder="Email Address*" class="w-full p-4 bg-[#F5F2EE] rounded-lg outline-none focus:ring-2 focus:ring-indigo-500">
        <input type="text" placeholder="Phone Number*" class="w-full p-4 bg-[#F5F2EE] rounded-lg outline-none focus:ring-2 focus:ring-indigo-500">
        <textarea placeholder="Message" class="w-full p-4 bg-[#F5F2EE] rounded-lg outline-none focus:ring-2 focus:ring-indigo-500 h-32"></textarea>
        <button class="bg-[#2F2E41] text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Submit</button>
      </form>
    </div>
    <!-- Image Section -->
    <div class="hidden md:block">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/bathroom.png'; ?>" alt="Bathroom Design" class="w-full h-full object-cover rounded-r-lg">
    </div>
  </div>
</div>
