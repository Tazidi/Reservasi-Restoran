<x-app-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://cdn.pixabay.com/photo/2017/01/26/02/06/platter-2009590_1280.jpg">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-blue-100 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome To ARKI Restaurant</span>
        </h1>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-blue-600 rounded-full lg:w-full md:w-auto hover:bg-blue-500 focus:outline-none">
                    Make Your Reservation
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
      > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-blue-600">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Welcome to our restaurant, where each dish tells its own unique tale.
                            Born out of our passion to deliver an unforgettable culinary experience, 
                            this restaurant is a labor of love and dedication to the art of gastronomy.
                            We believe that every dish is a blend of creativity, high-quality fresh ingredients,
                            and skillful hands crafted with care. With each bite, we invite you to embark on our culinary journey, 
                            exploring authentic flavors and bringing the warmth to your table.
                            Enjoy the narrative etched into each serving, and let's celebrate the deliciousness of life together.
                        </p>
                        <div class="relative flex">
                            <a href="/menus"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-600 rounded-md sm:mb-0 hover:bg-blue-700 sm:w-auto">
                                Our Menu
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-500">
                Testimonial </h2>
            <p class="text-xl text-white">from our beloved customers</p>
        </div>
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">"Absolutely delightful! The moment I stepped into this restaurant, 
                        I was greeted by a warm atmosphere and a menu that spoke volumes about their dedication to culinary excellence. 
                        Each dish I tried was a symphony of flavors, beautifully plated and made with the finest ingredients. 
                        A true gem for food enthusiasts!"</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a class="text-xl font-medium text-blue-500">David M. - Food Enthusiast</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">"As a regular customer, I can confidently say that this restaurant never fails to impress. 
                        The consistency in taste, the friendly staff, and the cozy ambiance make it my go-to dining spot. 
                        From casual lunches to special celebrations, this place has become a second home for me. Highly recommended!"</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-blue-500">Sarah J. - Regular Patron</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">"Exploring the diverse and creative menu of this restaurant has been a culinary adventure like no other. 
                        The chefs here are true artists, pushing the boundaries of flavor combinations. 
                        I appreciate the commitment to using fresh, local ingredients, and each visit is a new discovery. 
                        An absolute must-visit for anyone who loves to savor unique and innovative dishes!"</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-blue-500">Emily R. - Culinary Adventurer</a>
                </div>
            </div>
        </div>
    </section>
  </x-app-layout>