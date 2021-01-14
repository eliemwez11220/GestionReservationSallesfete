<footer class="text-muted footer" style="background-color:black;">
        <div class="container-fluid">
            <div class="row">
                <!-- Footer Column -->
                <div class="col-sm-3">
                    <!-- Logo -->
                    <div class="container">
                        <div class="logo">
                            <a href="<?php echo base_url('welcome/index'); ?>">
                                <img src="<?php echo base_url(''); ?>assets/img/weblabs.png" alt=" LOGO"
                                     width="100px" height="70px">
                            </a>
                        </div>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li class="btn btn-sm btn-danger"><a href="https://www.youtube.com/channel/UCL3Kt8mj9vDOO2ZQwjUfZCQ"><i
                                        class="fa fa-youtube" aria-hidden="true"></i> Youtube</a></li>
                            <li class="btn btn-sm btn-success"><a href="https://www.facebook.com/eglise.ceceeden"><i class="fab fa-facebook-f"
                                                                                      aria-hidden="true"></i>
                                    Facebook</a></li>
                            <li class="btn btn-sm btn-light"><a href="https://twitter.com/eden_cece"><i class="fa fa-twitter"
                                                                           aria-hidden="true"></i>
                                    Twitter</a></li>
                            <li class="btn btn-sm btn-warning"><a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                    LinkedIN</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="col-sm-3">
                    <div class="footer_links">
                        <div class="footer_title">Menu rapide</div>
                        <ul class="">
                            <li class="nav-item active">
                                <a href="<?php echo base_url('welcome/index'); ?>" class="nav-link"> Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('welcome/decouvrir_plateforme'); ?>" class="nav-link"> A
                                    propos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="col-sm-6">
                    <div class="footer_contact">
                        <div class="footer_title">Communiqué & contact</div>
                        <ul>
                            <li><span>Infos : </span>
                                infos générale sur les assurances
                            </li>
                            <li class="footer_contact_phone">
                                <span>Téléphone : </span>
                                <div>
                                    <div>+243 977 090 O11</div>
                                </div>
                            </li>
                            <li><span>Email: </span>emar.ruchi1@gmail.com</li>
                            <div class="footer_grid_left">
                                <h5>Ecrivez-nous</h5>
                                <a href="mailto:emar.ruchi1@gmail.com"
                                   class="fa fa-mail-reply-all">emar.ruchi1@gmail.com</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>
            Tous droits réservés | Website developped by <a href="https://emar-31.webself.net" target="_blank">EMAR
                IT PRO</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
</main>
<?php 
if (isset($this->session->role_utilisateur))
    {

foreach ($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; }?>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        })
    })

</script>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/app.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/plugins/pace.min.js"></script>

<?php //if (isset($this->session->role_utilisateur)) :?>
    <script type="text/javascript" src="<?= base_url();?>assets/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $('table').DataTable();
        });
    </script>
<?php //endif; ?>

<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
    $('#demoDate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
    });

    $('#demoSelect').select2();
</script>
</body>
</html>