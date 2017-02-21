
@extends('beneficiarios.template_edit')

@section('profile')


<!-- row -->
<div class="row">
  <div class="col-md-12">
    <!-- The time line -->
    <ul class="timeline">
      <!-- timeline time label -->
      <li class="time-label">
            <span class="bg-red">
              10 Feb. 2014
            </span>
      </li>
      <!-- /.timeline-label -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-envelope bg-blue"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

          <div class="timeline-body">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
            weebly ning heekya handango imeem plugg dopplr jibjab, movity
            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
            quora plaxo ideeli hulu weebly balihoo...
          </div>
          <div class="timeline-footer">
            <a class="btn btn-primary btn-xs">Read more</a>
            <a class="btn btn-danger btn-xs">Delete</a>
          </div>
        </div>
      </li>
      <!-- END timeline item -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-user bg-aqua"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
        </div>
      </li>
      <!-- END timeline item -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-comments bg-yellow"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

          <div class="timeline-body">
            Take me to your leader!
            Switzerland is small and neutral!
            We are more like Germany, ambitious and misunderstood!
          </div>
          <div class="timeline-footer">
            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
          </div>
        </div>
      </li>
      <!-- END timeline item -->
      <!-- timeline time label -->
      <li class="time-label">
            <span class="bg-green">
              3 Jan. 2014
            </span>
      </li>
      <!-- /.timeline-label -->

      <li>
        <i class="fa fa-clock-o bg-gray"></i>
      </li>
    </ul>
  </div>
  <!-- /.col -->
</div>


@endsection

@section('scripts')
<!--<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>-->

<script type="text/javascript">

  $(document).ready(function() {

    $('#detalle_3').addClass("active");

    console.log({{$data}});
  });
</script>

@endsection
