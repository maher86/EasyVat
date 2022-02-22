<footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Easy Vat</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script>
      @if(session('success'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('success')}}',
        timeout: 2000,
        }).show();
      @endif
      @if(session('adding user'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('adding user')}}',
        timeout: 2000,
        }).show();
      @endif
      @if(session('deleting user'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('deleting user')}}',
        timeout: 2000,
        }).show();
      @endif
      @if(session('profile updated'))
        new Noty({
        type: 'warning',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('profile updated')}}',
        timeout: 2000,
        }).show();
      @endif

      @if(session('page created'))
        new Noty({
        type: 'warning',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('page created')}}',
        timeout: 2000,
        }).show();
      @endif
      @if(session('video created'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('video created')}}',
        timeout: 2000,
        }).show();
      @endif
      @if(session('draft video'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('draft video')}}',
        timeout: 2000,
        }).show();
      @endif
      
      @if(session('draft page'))
        new Noty({
        type: 'warning',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('draft page')}}',
        timeout: 2000,
        }).show();
      @endif


      @if(session('create_category'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('create_category')}}',
        timeout: 2000,
        }).show();
      @endif

      @if(session('delete_cat'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('delete_cat')}}',
        timeout: 2000,
        }).show();
      @endif

      @if(session('update_category'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('update_category')}}',
        timeout: 2000,
        }).show();
      @endif
      @if(session('aboutus info'))
        new Noty({
        type: 'success',
        layout: 'topRight',
        timeout: 3000,
        theme: 'mint',
        text: '{{session('aboutus info')}}',
        timeout: 2000,
        }).show();
      @endif
</script>
    <script>
    function doAfterSelectImage(input){
      readURL(input);
      uploadUserAvatar();
    }
    function readURL(input){
      if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#user-avatar').attr('src', e.target.result );
        };
        // $('#user-avatar').attr('src', input.value );
        reader.readAsDataURL(input.files[0]);      
      }
    }
    function uploadUserAvatar(){
      let myform = document.getElementById('user_avatar_form');
      let formData = new FormData(myform);
      $.ajax({
        type:'post',
        data:formData,
        dataType:'JSON',
        contentType:false,
        cache:false,
        processData:false,        
        url:"",
        success:function(response){
          if(response== 200){
            $('#notifDiv').fadeIn();
            $('#notifDiv').css('background','green');
            $('#notifDiv').text('your Avatar is updated');
            setTimeout(() => {
              $('#notifDiv').fadeOut();
            }, 3000);
          }else if (response == 700){
            $('#notifDiv').fadeIn();
            $('#notifDiv').css('background','red');
            $('#notifDiv').text('there is wrong');
            setTimeout(() => {
              $('#notifDiv').fadeOut();
            }, 3000);

          }
        }
      })
    }
    
    </script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
