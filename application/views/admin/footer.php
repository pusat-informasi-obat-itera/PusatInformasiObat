            </div>
        <!--end row -->
        </div>
    <!--end conatiner -->
    </div>

<div class="container footer">
    &copy 2019 Pusat Informasi Obat Klinik ITERA
</div>
</body>
</html>

<?php
	if (!empty($script))$this->load->view($script);
?>

<script type="text/javascript">
	
    $(document).ready(function(){
        $('.tanggalan').datetimepicker({
          timepicker:false,
          format:'Y-m-d',
          formatDate:'Y-m-d',
        });
        $("#info-alert").fadeTo(2000,50).slideUp(50,function(){
            $("#info-alert").slideUp(50);
        }); 
    })

</script>