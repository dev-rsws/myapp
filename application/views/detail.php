<?php 
    $this->load->view('partials/header');
?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $blog['title']; ?></h1>
                            <span class="meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2023
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>
                            <?php echo $blog['content']; ?>
                        </p>
                        <p>
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>



<?php 
    $this->load->view('partials/footer');
?>