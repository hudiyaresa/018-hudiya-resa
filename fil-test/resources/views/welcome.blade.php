{{-- <x-layout-guest> --}}


    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
    
        <!--Page Title-->
        {{-- <title>Namari - Free Landing Page Template</title> --}}
        <x-slot:title>{{ $title }}</x-slot:title>
  
    
        <!--Meta Keywords and Description-->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    
        <!--Favicon-->
        <link rel="shortcut icon" href="css/template/images/favicon.ico" title="Favicon"/>
    
        <!-- Main CSS Files -->
        <link rel="stylesheet" href="css/template/style.css">
    
        <!-- Namari Color CSS -->
        <link rel="stylesheet" href="css/template/namari-color.css">
    
        <!--Icon Fonts - Font Awesome Icons-->
        <link rel="stylesheet" href="css/template/font-awesome.min.css">
    
        <!-- Animate CSS-->
        <link href="css/template/animate.css" rel="stylesheet" type="text/css">
    
        <!--Google Webfonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="status" class="la-ball-triangle-path">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--End of Preloader-->
    
    <div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
        <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
        <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
        <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
        <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
    </div>
    
    <div id="wrapper">
    
        <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
            <div id="header" class="nav-collapse">
                <div class="row clearfix">
                    <div class="col-1">
    
                        <!--Logo-->
                        <div id="logo">
    
                            <!--Logo that is shown on the banner-->
                            <img src="css/template/images/logo.png" id="banner-logo" alt="Landing Page"/>
                            <!--End of Banner Logo-->
    
                            <!--The Logo that is shown on the sticky Navigation Bar-->
                            <img src="css/template/images/logo-2.png" id="navigation-logo" alt="Landing Page"/>
                            <!--End of Navigation Logo-->
    
                        </div>
                        <!--End of Logo-->
    
                        <aside>
    
                            <!--Social Icons in Header-->
                            <ul class="social-icons">
                                <li>
                                    <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                                        <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Google+" href="http://google.com/+username">
                                        <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                                        <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                                        <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" title="behance" href="http://www.behance.net">
                                        <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                                    </a>
                                </li>
                            </ul>
                            <!--End of Social Icons in Header-->
    
                        </aside>
    
                        <!--Main Navigation-->
                        <nav id="nav-main">
                            <ul>
                                <li>
                                    <a href='/'>Home</a>
                                </li>
                                <li>
                                    <a href="#features">Features</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact Us</a>
                                </li>
                                {{-- <li>
                                    <a href="#testimonials">Testimonials</a>
                                </li> --}}
                                {{-- <li>
                                    <a href="#clients">Clients</a>
                                </li> --}}
                            </ul>
                        </nav>
                        <!--End of Main Navigation-->
    
                        <div id="nav-trigger"><span></span></div>
                        <nav id="nav-mobile"></nav>
    
                    </div>
                </div>
            </div><!--End of Header-->
    
            <!--Banner Content-->
            <div id="banner-content" class="row clearfix">
    
                <div class="col-38">
    
                    <div class="section-heading">
                        <h1>SMART AUTOMOTIVE</h1>
                        <h2>From Mileage to Maintenance, Seamlessly Connected. This innovative website bridges the gap between your motorcycle and its service schedule. Using Intuitive Data Structures, it creates a Reminder System, keeping your bike running smoothly and extending its lifespan.</h2>
                    </div>
    
                    <!--Call to Action-->
                    <a href="/admin/login" class="button">GET STARTED</a>
                    <!--End Call to Action-->
    
                </div>
    
            </div><!--End of Row-->
        </header>
    
        <!--Main Content Area-->
        <main id="content">
    
            <!--Introduction-->
            <section id="features" class="introduction scrollto">
    
                <div class="row clearfix">
    
                    <div class="col-3">
                        <div class="section-heading">
                            <h3>FEATURES</h3>
                            <h2 class="section-title">How We Help You To Manage Your Vehicle Service</h2>
                            <p class="section-subtitle">This website empowers you to effortlessly register and keep track of your vehicles, ensuring you never miss a beat when it comes to essential maintenance. Designed with user experience in mind, our responsive and intuitive interface makes it easy for anyone to navigate and utilize.</p>
                        </div>
    
                    </div>
    
                    <div class="col-2-3">
    
                        <!--Icon Block-->
                        <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                            <!--Icon-->
                            <div class="icon">
                                <i class="fa fa-table fa-2x"></i>
                            </div>
                            <!--Icon Block Description-->
                            <div class="icon-block-description">
                                <h4>Vehicle Forms</h4>
                                <p>Easily register and manage your vehicles in one convenient list, complete with detailed data for each vehicle</p>
                            </div>
                        </div>
                        <!--End of Icon Block-->
    
                        <!--Icon Block-->
                        <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                            <!--Icon-->
                            <div class="icon">
                                <i class="fa fa-bell fa-2x"></i>
                            </div>
                            <!--Icon Block Description-->
                            <div class="icon-block-description">
                                <h4>Reminders</h4>
                                <p>Stay ahead with timely reminders for STNK tax renewals, and schedule alerts for oil, brake, tire, and battery changes</p>
                            </div>
                        </div>
                        <!--End of Icon Block-->
    
                        <!--Icon Block-->
                        <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                            <!--Icon-->
                            <div class="icon">
                                <i class="fa fa-tablet fa-2x"></i>
                            </div>
                            <!--Icon Block Description-->
                            <div class="icon-block-description">
                                <h4>Easy to Use and Fully Responsive</h4>
                                <p>The website design is fully responsive on both mobile and desktop, offering a seamless and intuitive user experience</p>
                            </div>
                        </div>
                        <!--End of Icon Block-->
    
                        <!--Icon Block-->
                        <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                            <!--Icon-->
                            <div class="icon">
                                <i class="fa fa-wrench fa-2x"></i>
                            </div>
                            <!--Icon Block Description-->
                            <div class="icon-block-description">
                                <h4>Support and Updates</h4>
                                <p>We listen to your needs to ensure you have the best possible experience and will continuously update many features</p>
                            </div> 
                        </div>
                        <!--End of Icon Block-->
    
                    </div>
    
                </div>
    
    
            </section>
            <!--End of Introduction-->
    
            <!--Testimonials-->
            <aside id="contact" class="scrollto text-center" data-enllax-ratio=".2">
    
                <div class="row clearfix">
    
                    <div class="section-heading">
                        <h3>FEEDBACK</h3>
                        <h2 class="section-title">Contact Us</h2>
                        <p class="section-subtitle">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                    </div>
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                      <form action="#" class="space-y-8">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                            <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                            <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                            <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                        </div>
                        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                      </form>
                    </div>
                </div>  
            </aside>
            <!--End of Testimonials-->
    
            <!--Clients-->
            <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
              <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
              </div>
              <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
              </div>
              <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                  <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                    <div class="mt-2.5">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                    <div class="mt-2.5">
                      <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                    <div class="mt-2.5">
                      <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                      <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
                    <div class="relative mt-2.5">
                      <div class="absolute inset-y-0 left-0 flex items-center">
                        <label for="country" class="sr-only">Country</label>
                        <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                          <option>US</option>
                          <option>CA</option>
                          <option>EU</option>
                        </select>
                        <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                  <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                      <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                  </div>
                  <div class="flex gap-x-4 sm:col-span-2">
                    <div class="flex h-6 items-center">
                      <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                      <button type="button" class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                        <span class="sr-only">Agree to policies</span>
                        <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                        <span aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                      </button>
                    </div>
                    <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                      By selecting this, you agree to our
                      <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                    </label>
                  </div>
                </div>
                <div class="mt-10">
                  <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
                </div>
              </form>
            </div>          
            <!--End of Clients-->
    
            <!--Pricing Tables-->
            <section id="pricing" class="secondary-color text-center scrollto clearfix ">
                <div class="row clearfix">
    
                    <div class="section-heading">
                        <h3>YOUR CHOICE</h3>
                        <h2 class="section-title">We have the right package for you</h2>
                    </div>
    
                    <!--Pricing Block-->
                    <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-block-content">
                            <h3>Personal</h3>
                            <p class="pricing-sub">The standard version</p>
                            <div class="pricing">
                                <div class="price"><span>$</span>19</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <ul>
                                <li>5 Downloads</li>
                                <li>2 Extensions</li>
                                <li>Tutorials</li>
                                <li>Forum Support</li>
                                <li>1 year free updates</li>
                            </ul>
                            <a href="#" class="button">BUY TODAY</a>
                        </div>
                    </div>
                    <!--End Pricing Block-->
    
                    <!--Pricing Block-->
                    <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-block-content">
                            <h3>Student</h3>
                            <p class="pricing-sub">Most popular choice</p>
                            <div class="pricing">
                                <div class="price"><span>$</span>29</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <ul>
                                <li>15 Downloads</li>
                                <li>5 Extensions</li>
                                <li>Tutorials with Files</li>
                                <li>Forum Support</li>
                                <li>2 years free updates</li>
                            </ul>
                            <a href="#" class="button">BUY TODAY</a>
                        </div>
                    </div>
                    <!--End Pricing Block-->
    
                    <!--Pricing Block-->
                    <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="pricing-block-content">
                            <h3>Business</h3>
                            <p class="pricing-sub">For the whole team</p>
                            <div class="pricing">
                                <div class="price"><span>$</span>49</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <ul>
                                <li>Unlimited Downloads</li>
                                <li>Unlimited Extensions</li>
                                <li>HD Video Tutorials</li>
                                <li>Chat Support</li>
                                <li>Lifetime free updates</li>
                            </ul>
                            <a href="#" class="button">BUY TODAY</a>
                        </div>
                    </div>
                    <!--End Pricing Block-->
    
                </div>
            </section>
            <!--End of Pricing Tables-->
    
        </main>
        <!--End Main Content Area-->
    
    
        <!--Footer-->
        <footer id="landing-footer" class="clearfix">
            <div class="row clearfix">
    
                <p id="copyright" class="col-2">Made with love by <a href="https://www.shapingrain.com">ShapingRain</a></p>
    
                <!--Social Icons in Footer-->
                <ul class="col-2 social-icons">
                    <li>
                        <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                            <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Google+" href="http://google.com/+username">
                            <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                            <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                            <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="behance" href="http://www.behance.net">
                            <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                        </a>
                    </li>
                </ul>
                <!--End of Social Icons in Footer-->
            </div>
        </footer>
        <!--End of Footer-->
    
    </div>
    
    <!-- Include JavaScript resources -->
    <script src="js/template/jquery.1.8.3.min.js"></script>
    <script src="js/template/wow.min.js"></script>
    <script src="js/template/featherlight.min.js"></script>
    <script src="js/template/featherlight.gallery.min.js"></script>
    <script src="js/template/jquery.enllax.min.js"></script>
    <script src="js/template/jquery.scrollUp.min.js"></script>
    <script src="js/template/jquery.easing.min.js"></script>
    <script src="js/template/jquery.stickyNavbar.min.js"></script>
    <script src="js/template/jquery.waypoints.min.js"></script>
    <script src="js/template/images-loaded.min.js"></script>
    <script src="js/template/lightbox.min.js"></script>
    <script src="js/template/site.js"></script>
    
    
    </body>
    </html>
  {{-- </x-layout-guest> --}}
  
  