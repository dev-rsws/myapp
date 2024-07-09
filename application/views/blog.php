<?php 
    $this->load->view('partials/header');
?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo base_url();?>assets/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                <form> <!--secara default bermethod get-->
                    <input type="text" name="find">
                     <button type="submit">Cari</button>
                </form>

                    <?php foreach($blogs as $key => $blog): ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?php echo site_url('blog/detail/' . $blog['url']); ?>">
                            <h2 class="post-title"><?php echo $blog['title'] ;?></h2>
                        </a>
                        <p class="post-meta">
                            <?php echo $blog['date'] ;?>
                            <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>">EDIT</a>
                            <a href="<?php echo site_url('blog/delete/' . $blog['id']); ?>">DELETE</a>
                        </p>
                        <p class="post-meta">
                            <?php echo $blog['content'] ;?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <?php endforeach ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>

<?php 
    $this->load->view('partials/footer');
?>
        
        

        !=
        