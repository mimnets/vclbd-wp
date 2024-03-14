<?php 
/*
* The template for display the footer
*/
?>
<footer class="container-fluid py-5">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Stay Connected:</h5>
                <form>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">
                                Sign up
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- social media icons -->
                <div class="my-3">
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <i class="fab fa-instagram-square fa-2x"></i>
                    <i class="fab fa-pinterest-square fa-2x"></i>
                    <i class="fab fa-youtube-square fa-2x"></i>
                </div>
                </div>
                <div class="col-sm-4">
                    <h5>Out Setting</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eveniet accusantium praesentium quibusdam nihil perferendis qui adipisci vitae necessitatibus dolor omnis, iste quo sit accusamus ex. Tempora modi natus similique.
                    Quibusdam beatae, ex recusandae velit dignissimos nesciunt quae sunt enim. Odit ipsa hic autem molestiae natus officia perspiciatis, cumque dicta inventore reiciendis, cupiditate repellat porro asperiores incidunt nulla fuga quisquam! </p>
                </div>
                <div class="col-sm-4">
                    <h5>Navigation</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="blog.html">Blog</a></li>
                        <li class="list-group-item"><a href="contact.html">Contact</a></li>
                        <li class="list-group-item"><a href="privacy-policy.html">Pivacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    <!-- JS -->
    <script src="js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
  </body>

</html>