@extends('Base')

@section('content')
<div class="container">
    <div class="row">
        <div class="text-center feature-head">
            <h1>Work</h1>
        </div>
        <div class="col-lg-4 col-sm-4">
            <section>
                <div class="f-box">
                    <i class="icon-desktop"></i>
                    <h2>Blog</h2>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

@section('asset_footer')
<script type="text/javascript">
$(document).ready(function(){
    $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });
});
</script>
@endsection