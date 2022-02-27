<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

<!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
   
<script>
    
    $(document).ready(function(){
        $(document).on('change','#file' function(){
            var property = document.getElementById("file").files[0];
            var image_name = property.name;
            var image_extension = image_name.split('.').pop().toLowerCase();
            if(jQuery.inArray(image_extension,['png','jpg','jpeg']) == -1)
            {
                alert('Invalid Image File');
            }
            var image_size = property.size;
            if(image_size > 2000000)
            {
                alert("Image File Size Is Too Long");
            }
            else
            {
                var form_data = new FormData();
                form_data.append("file", property);
                $.ajax({
                    url:"upload.php";
                    method:"POST";
                    data:form_data;
                    contentType:false;
                    cache:false;
                    processDate:false;
                    beforeSend:function(){
                        $('#upload_image').html("<label class='text-success'>Image Uploaded...</label>");
                    },
                    success:function(data)
                    {
                        $('#upload_image').html(data);
                    }
                })
            }
        });
    });

</script>


    <!-- Custom Theme Scripts -->
    
  </body>
</html>