</div>
            </div>
            <!-- End Page -->

            <!-- Footer -->
            <div class="footer">
                <p>Created by Wiradarma NB</p>
            </div>
            <!-- End Footer -->

        </div>]

        <script>
            $(document).ready(function() {
                var menu = 0;
                $('#menu-toogle').click(function(e){
                    if(menu == 0){
                        $("#wrapper").addClass("sidebar-tutup");
                        $(".icon-menu").addClass("fas fa-chevron-right fa-md text-white mx-auto icon-menu");
                        menu = 1;
                    }else{
                        $("#wrapper").removeClass("sidebar-tutup");
                        $(".icon-menu").removeClass("fa-chevron-right");
                        menu = 0;
                    }
                });

                $("#menu-kecil").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("sidebar-buka");
                });

                // Modal
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                });

                // Datepicker
                for($i = 1; $i<1000; $i++)
                {
                    $('#datepicker'+$i).datepicker({
                        format: 'yyyy-mm-dd',
                        autoclose: true,
                        todayHighlight: true
                    });
                }

                // Datepicker
                for($i = 1; $i<1000; $i++)
                {
                    $('#datepick'+$i).datepicker({
                        format: 'yyyy-mm-dd',
                        autoclose: true,
                        todayHighlight: true
                    });
                }

                // Datatable
                var table = $('#datatable').DataTable( {
                    responsive: true
                });
                new $.fn.dataTable.FixedHeader( table );

                // selectpicker
                $('.myselectpicker').selectpicker();

                $('.myselectpicker2').selectpicker();

                
            });
            
            
        </script>
    </body>
</html>