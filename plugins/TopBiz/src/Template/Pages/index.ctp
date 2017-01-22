<div class="boxWrapper">
    <!-- Breadcrumb Section -->
    <section class="breadCrumArea">
    </section>
    <!-- Blog Post Page Section -->
    <section class="blogSidebarArea commonSection postPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="blogSidbarPost">
                        <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><a href="#"><a><?= $content[0]['cat']['name']; ?></a></h2>
                        <hr>
                        <div class="blogPostContent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <?= $content[0]['content']['description']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

