<?php
/**
 * Jcrop image cropping plugin for jQuery
 * Example cropping script
 * @copyright 2008-2009 Kelly Hallman
 * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($photo)) {
    $targ_w = $targ_h = 150;
    $jpeg_quality = 90;

    $src = $_POST["photo"];
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor($targ_w, $targ_h);

    imagecopyresampled($dst_r, $img_r, 0, 0, $_POST['x'], $_POST['y'],
            $targ_w, $targ_h, $_POST['w'], $_POST['h']);

    header('Content-type: image/jpeg');
    imagejpeg($dst_r, $src, $jpeg_quality);

    header("location: ".BASE_URL."/admin/account");
    exit;
}

// If not a POST request, display page below:
?>


<style type="text/css">
    #target {
        background-color: #ccc;
        width: 500px;
        height: 330px;
        font-size: 24px;
        display: block;
    }


</style>
<!DOCTYPE html>
<html lang="en">
    <head>


    </head>
    <body>


        <div class="span12">
            <div class="jc-demo-box">

                <div class="page-header">
                    <h1>Cortar imagem</h1>
                </div>

                <!-- This is the image we're attaching Jcrop to -->
                <img src="../../../<?php echo $photo; ?>" id="cropbox" />

                <!-- This is the form that our event handler fills -->
                <form action="crop.php" method="post" onsubmit="return checkCoords();">
                    <input type="hidden" id="x" name="x" />
                    <input type="hidden" id="y" name="y" />
                    <input type="hidden" id="w" name="w" />
                    <input type="hidden" id="h" name="h" />
                    <input type="hidden" name="photo" value="<?php echo $photo; ?>">
                    <input type="submit" value="Cortar" class="btn btn-large btn-inverse" />
                </form>


            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="../../../application/views/res/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../../../application/views/res/admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../../../application/views/res/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../../../application/views/res/admin/vendor/slick/slick.min.js">
</script>
<script src="../../../application/views/res/admin/vendor/wow/wow.min.js"></script>
<script src="../../../application/views/res/admin/vendor/animsition/animsition.min.js"></script>
<script src="../../../application/views/res/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="../../../application/views/res/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="../../../application/views/res/admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="../../../application/views/res/admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="../../../application/views/res/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../../application/views/res/admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="../../../application/views/res/admin/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="../../../application/views/res/admin/js/main.js"></script>
<script src="../../../application/views/res/admin/js/jquery.Jcrop.js"></script>
<script type="text/javascript">

                $(function () {

                    $('#cropbox').Jcrop({
                        aspectRatio: 1,
                        onSelect: updateCoords
                    });

                });

                function updateCoords(c)
                {
                    $('#x').val(c.x);
                    $('#y').val(c.y);
                    $('#w').val(c.w);
                    $('#h').val(c.h);
                }
                ;

                function checkCoords()
                {
                    if (parseInt($('#w').val()))
                        return true;
                    alert('Please select a crop region then press submit.');
                    return false;
                }
                ;

</script>
</body>

</html>
<!-- end document-->
