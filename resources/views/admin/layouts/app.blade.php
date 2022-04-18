<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('../admin/inc/toppart')
</head>
<body>
    @include('../admin/inc/navbar')

    @include('../admin/inc/sidebar')

    <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-body">
        <div class="row">
            <div class="col-md-12">
                <section id="html">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">@yield('title')</h4>
                            <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-content collpase show">
                            <div class="card-body card-dashboard">

                            @yield('content')

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
      </div>
    </div>
  </div>

    @include('../admin/inc/footer')

</body>
</html>