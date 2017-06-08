<div class="row">

            <!-- Blog Entries Column -->

            <div class="col-md-8">
            <?php foreach ($isi_buku as $ib) { ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $ib['judul'] ?></a>
                </h2>
                <p class="lead">
                    Penulis <a href="index.php"><?php echo $ib ['penulis'] ?></a>
                </p>
                <p><i class="fa fa-clock-o"></i> </p>
                <hr>
                <hr>
                <p><?php echo $ib['id_buku'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>
            <?php } ?>
               

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>


