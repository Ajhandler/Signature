<!-- crappy style workaround for now -->
<style>
    body{
        padding-top: 70px;
    }
</style>
    <!-- Navigation -->
    <?php
        $work = "Comcercial";
        include 'shared/header.php'
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $work; ?> <small></small>
                </h1>
            </div>
            </div>
            <div class="row">
                 <div class="col-lg-6 col-lg-offset-3">
                <select class="form-control work-form">
            <option>Please Select Detail</option>
            <option>Trim</option>
            <option>Modern</option>
            <option>Option</option>
            <option>Option</option>
            </select>
                </div> 
        </div>
        <!-- /.row -->
        <div id="portfolio">
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c1.jpg">
                    <img class="img-responsive" src="img/comercial/c1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c2.jpg">
                    <img class="img-responsive" src="img/comercial/c2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c3.jpg">
                    <img class="img-responsive" src="img/comercial/c3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c4.jpg">
                    <img class="img-responsive" src="img/comercial/c4.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c5.jpg">
                    <img class="img-responsive" src="img/comercial/c5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c6.jpg">
                    <img class="img-responsive" src="img/comercial/c6.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c7.jpg">
                    <img class="img-responsive" src="img/comercial/c7.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="img/comercial/c8.jpg">
                    <img class="img-responsive" src="img/comercial/c8.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
    </div>
        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php 
      include 'shared/footer.php'
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/gallery.js"></script>

</body>

</html>
