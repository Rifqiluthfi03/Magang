<?php
include_once("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM project");
?>
<body>
<div class="container">
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="span12">
   <script type="text/javascript">
 $(document).ready(function()
  {
   var delay = 2000;
  setTimeout(function(){ window.location = 'lihatdatasiswa.php';}, delay);
    });
</script>
            <section id="h-default">
                <div class="row-fluid">
                        <div id="prog" class="progress progress-info progress-striped">
                            <div class="bar text-filled-1" data-amount-part="1337" data-amount-total="9000" data-percentage="100"></div>
                        </div>
                </div>
            </section>
           
        </div>
  </div>
  </body>