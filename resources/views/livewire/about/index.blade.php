<div class="h-full pb-36 pt-[69px]">
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
            </svg>
            <blockquote>
                <p class="text-2xl font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                </div>
            </figcaption>
        </figure>
    </div>
  </section>

  <!-- component -->

    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="">
        <img class=" h-full object-cover object-top" src="{{asset('img/377757949_616040997111092_656681553343105129_n.jpg')}}" alt="">
      </div>
      <div class="flex bg-gray-100 p-10">
        <div class="mb-auto mt-auto max-w-lg">
          <h1 class="text-3xl uppercase">Jun Santilla</h1>
          <p class="font-semibold mb-5">Web Developer</p>
          <p>"This is the day when I designed a website for our company using the Figma prototype."</p>
          <button class="bg-black rounded-md py-3 px-7 mt-6 text-white">Email Me</button>
        </div>
      </div>
    </div>

    <main class="grid w-full min-h-screen text-gray-100 bg-gray-100 place-content-center">
        <div class="flex flex-row">
            <div>
        <section x-data="skillDisplay"
            class="p-6 space-y-6 bg-gray-800 rounded-xl md:grid md:grid-cols-2 md:gap-4 sm:space-y-0">
            <div class="grid grid-cols-2 gap-6">
                <template x-for="skill in skills">
                    <button x-text="skill.title"
                        class="px-4 py-2 text-xl text-gray-100 transition bg-blue-600 rounded-md h-14 w-44 hover:bg-blue-700"
                        :class="(currentSkill.title == skill.title) && 'font-bold ring-2 ring-gray-100'"
                        @click="currentSkill = skill"></button>
                </template>
            </div>

            <div class="flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120 }">
                <svg class="transform -rotate-90 w-72 h-72">
                    <circle cx="145" cy="145" r="120" stroke="currentColor" stroke-width="30" fill="transparent"
                        class="text-gray-700" />

                    <circle cx="145" cy="145" r="120" stroke="currentColor" stroke-width="30" fill="transparent"
                        :stroke-dasharray="circumference"
                        :stroke-dashoffset="circumference - currentSkill.percent / 100 * circumference"
                        class="text-blue-500 " />
                </svg>
                <span class="absolute text-5xl" x-text="`${currentSkill.percent}%`"></span>
        </section>
            </div>

            <div>sejfhiesufhes</div>
        </div>
    </main>
@include('livewire.about.components.bar1')
</div>
