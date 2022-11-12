
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> الشركه الوطنيه للمقاولات والتوريدات العامه - عرض المشروعات </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body
        {
            direction: rtl;
        }
        .documentheader h3
        {
            font-size: 18px;
        }
        .table
        {
            text-align: center;
        }
        .table thead
        {
            background-color: #00ff80;
        }
    </style>
</head>
<body>
<div class="documentheader">
    <div class="row">
        <div class="col-md-3">
            <img src="{{asset('assets/images/backend_images/logo.png')}}" height="100px" width="100px" style="margin-bottom: 30px ">
        </div>

    </div>
</div>
<table class="table table-responsive table-bordered">
    <thead>
    <tr>
        <th>رقم  المشروع </th>
        <th>أسم  المشروع </th>
        <th>تاريخ البدء </th>
        <th>القطاع</th>
        <th>تاريخ الانتهاء </th>
        <th>حاله  المشروع </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($allprojects as $project)
        <tr>
            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$project->id}}</a> </td>
            <td>{{$project->title}}</td>
            <td>{{$project->start_date}}</td>
            <td>
                @foreach($sectors as $sector)
                    @if($project->sector ==  $sector->id )  {{ $sector->sector_name }}@endif
                @endforeach
            </td>

            <td>{{$project->end_date}}</td>
            <td>
                @if($project->project_status == 1 )
                    <p class="badge bg-soft-danger font-size-12">
                        تسليم ابتدائى
                    </p>

                @elseif ($project->project_status == 2 )
                    <p class="badge bg-soft-warning font-size-12">
                        تسليم نهائى
                    </p>
                @elseif ($project->project_status ==  3 )
                    جارى التنفيذ

                @elseif ($project->project_status ==  4 )
                    تحت الدراسة

                @elseif ($project->project_status ==  5 )
                    تم التنفيذ
                    </p>
                @endif

            </td>
        </tr>
        @endforeach
    </tr>
    </tbody>
</table>

</body>
</html>

