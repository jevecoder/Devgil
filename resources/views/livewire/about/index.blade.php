<div class="h-full pt-[69px]">
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
            <blockquote>
                <p class="text-2xl font-medium text-gray-900 dark:text-white"> I'm a front end developer with 1 year of experience in web development. I've worked on a variety of projects for clients in the Students. I'm passionate about creating great user experiences and have a strong understanding of usability and accessibility standards.</p>
        </figure>
    </div>
  </section>

  <!-- component -->

    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="">
        <img class="object-cover object-top h-full " src="{{asset('img/seller.jpg')}}" alt="">
      </div>
      <div class="flex p-10 bg-gray-100">
        <div class="max-w-lg mt-auto mb-auto">
          <h1 class="text-3xl uppercase">Jeril GIl A, Labagnoy</h1>
          <p class="mb-5 font-semibold">Front-end Developer</p>
          <p>"Hello, have a nice day! I'm Jeril Gil A. Labagnoy, and I offer website development services. You can contact me, and we can discuss and agree on the pricing. I also provide computer repair services. Additionally, I have various technologies for sale, so you can explore them on my websites. Thank you for visiting my portfolio. Feel free to hire me for your job offers."</p>
          <button class="py-3 mt-6 text-white bg-black rounded-md px-7">Email Me</button>
        </div>
      </div>
    </div>

            <div class="flex items-center justify-center w-full mb-10 bg-gray-900 mt-28 profile-skills">
                <div class="hidden w-4/12 h-52 md:flex sm:flex">
                    <p class="font-mono text-lg font-bold text-white">Here, you can see all the progress of my skills. If you have any questions, you can contact me through my email. Thank you.</p>
                  </div>
                <div>
                    <input type="checkbox" id="sk1">
                    <label for="sk1"></label>
                    <ul class="skills skills1">
                        <li class="sk-cms"><span>CMS</span></li>
                        <li class="sk-dtb"><span>DDBB</span></li>
                        <li class="sk-dis"><span>Design</span></li>
                        <li class="sk-pro"><span>Programing</span></li>
                        <li class="sk-ani"><span>Animation</span></li>
                        <li class="more">
                            <input type="checkbox" id="more-con"><label for="more-con"></label>
                            <div><span>PHOTO</span><span>API</span><span>MAPS</span><span>VIDEO</span><span>CHARTS</span><span>RWD</span></div>
                        </li>
                    </ul>
                </div>

                <div>
                <input type="checkbox" id="sk2">
                <label for="sk2"></label>
                <ul class="skills skills2">
                    <li class="sk-gim"><span>Gimp</span></li>
                    <li class="sk-ado"><span>Adobe&nbsp;CC</span></li>
                    <li class="sk-not"><span>Notepad++</span></li>
                    <li class="sk-tri"><span>Tridion</span></li>
                    <li class="sk-wor"><span>Wordpress</span></li>
                    <li class="more">
                        <input type="checkbox" id="more-pro"><label for="more-pro"></label>
                        <div><span>JOOMLA</span><span>DRUPAL</span><span>JIRA</span><span>TRELLO</span><span>FILEZILLA</span><span>GIT</span></div>
                    </li>
                </ul>
                </div>

                <div>
                <input type="checkbox" id="sk3">
                <label for="sk3"></label>
                <ul class="skills skills3">
                    <li class="sk-css"><span>CSS</span></li>
                    <li class="sk-htm"><span>HTML</span></li>
                    <li class="sk-jav"><span>JS</span></li>
                    <li class="sk-php"><span>PHP</span></li>
                    <li class="sk-sql"><span>SQL</span></li>
                    <li class="more">
                        <input type="checkbox" id="more-len"><label for="more-len"></label>
                        <div><span>XHTML</span><span>XSL</span><span>XML</span><span>JSON</span><span>PUG</span><span>SASS</span></div>
                    </li>
                </ul>
                </div>
            </div>
@include('livewire.about.components.bar1')
</div>
