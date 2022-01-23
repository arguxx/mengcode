<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Primary Meta Tags -->
        <title>Mengcode.</title>
        <meta name="title" content="Mengcode.">
        <meta name="description" content="Website who store multiple links
        to help you growth.">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        />

    <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://mengcode.netlify.app/">
        <meta property="og:title" content="Mengcode.">
        <meta property="og:description" content="Website who store multiple links
        to help you growth.">
        <meta property="og:image" content="https://mengcode.netlify.app/meta.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://mengcode.netlify.app/">
        <meta property="twitter:title" content="Mengcode.">
        <meta property="twitter:description" content="Website who store multiple links
        to help you growth.">
        <meta property="twitter:image" content="https://mengcode.netlify.app/meta.png">

        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>MengCode</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link rel="icon" href="./src/icon/MengCode.svg" type="image/icon type">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

    <body>
        <!-- Apps -->
        <div class="apps">
            <!-- Header -->
            <div class="header">
                <div class="header-logo">
                    <img src="{{ asset('logo/logo.svg') }}" alt="">
                </div>
            </div>
            <!-- End of Header -->

            <!-- Search Bar -->
            <div class="search">
                <div id="searchWrapper">
                    <input
                    type="text"
                    style="color: #FDFCFC; font-family: 'IBM Plex Mono', monospace; font-size: 2rem; background-color:#504E4E ";
                    name="searchBar"
                    id="searchBar"
                    placeholder="Start typing ..."
                    />
                </div>
            </div>
            <!-- End Search Bar -->

            <!-- Button Category -->
            <div class="btn-container">
            </div>
            <!-- Content -->
                        <div class="section-center">
                          <!-- Single Content -->
                          @foreach ($content as $content)                             
                          <div class="item-content">
                            <!-- image -->
                            <div class="photo-box">
                                <img src="{{ asset('storage/' . $content->src) }}" alt={{ $content->title }}>
                            </div>
                            <!-- box title and icon -->
                            <div class="title-and-icon">
                                <!-- text body -->
                                <div class="title">
                                    <h1>{{ $content->title }}</h1>
                                    <p>{{ $content->description }}</p>
                                </div>
                                <div class="icon">
                                    <a href="{{ $content->link }}" target="_blank" rel="noopener" <button="" type="button" class="filter-btn" id="visit">Visit
                                    </a>
                                </div>
                            </div>
                            </div>
                  @endforeach
            </div>
                <!-- End Content -->
                
                <!-- Footer -->
            <div class="demo">
                <div class="footer-text">
                <h1>About</h1>
                <p>Website who store multiple links <br>to help you growth.</p>
            </div>
            <div class="contribute">
                <h1>Contribute</h1>
                <p>Want to help to the others? <br>Share your unique link <button class="btn modal-btn"> here</button></p>
            </div>
            <div class="link-profile">
                <h1>Profile</h1>
                <div class="link">
                  <a href="https://www.instagram.com/lovelymondayz/" target="_blank" rel="noopener" class="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                  </a>
                  <a href="https://www.linkedin.com/in/arji-maulana/" target="_blank" rel="noopener" class="linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                  </a>
                  <a href="https://arjism.netlify.app" target="_blank" rel="noopener" class="web">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                  </a>
                  <a href="https://github.com/lovelymondays" target="_blank" rel="noopener" class="github">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                  </a>
                  <a href="https://twitter.com/lovelymondayz" target="_blank" rel="noopener" class="twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                  </a>
                </div>
              </div>
              <div class="modal-overlay">
                <div class="modal-container">
                  <form class="form"  method="POST" data-netlify="true" value="recommend" name="recommend">
                    <input
                      type="text"
                      id="category"
                      class="form__input"
                      autocomplete="off"
                      placeholder=" "
                      name="category"
                      required
                    />
                    <br />
                    <label for="category" class="form__label">Category</label> <br />
                    <input
                      type="text"
                      id="link"
                      class="form__input"
                      autocomplete="off"
                      placeholder=" "
                      name="link"
                      required
                    />
                    <br />
                    <label for="link" class="form__label">Link</label><br />
                    <input
                      type="text"
                      id="title"
                      class="form__input"
                      autocomplete="off"
                      placeholder=" "
                      name="title"
                      required
                    />
                    <br />
                    <label for="title" class="form__label">Title</label><br />
                    <input
                      type="text"
                      id="desc"
                      class="form__input"
                      autocomplete="off"
                      placeholder=" "
                      name="desc"
                      required
                    />
                    <label for="desc" class="form__label">Short Description</label><br />
                    <button class="submit-btn" type="submit">Submit</button>
                  </form>
                  <button class="close-btn">
                    <i class="fas fa-times"></i>
                </button>
                </div>
            </div> 
            </div>
            
            <!-- End Footer -->
            
        </div>
        <div class="footer"><p>Mulai aja Dulu</p></div>
        <!-- End Apps -->
        
    </body>
    <script src="app.js"></script>
    <script src="disable.js"></script>
    <script src="modal.js"></script>
</html>