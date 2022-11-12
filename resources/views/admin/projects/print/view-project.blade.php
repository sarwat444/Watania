
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> الشركه الوطنيه للمقاولات والتوريدات العامه - وصف المشروع  </title>
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
    <div class="card">
        <div class="card-body faxdetails">

            <div class="row">
                <div class="col-md-4">
                    <p><span>خاص بالجهه : </span> {{$faxdetails->khas_geha}}</p>
                </div>
                <div class="col-md-4">
                    <p><span> رقم القيد  : </span> {{$faxdetails->kaed}}</p>
                </div>
                <div class="col-md-4">
                    <p><span> جهه الاختصاص  : </span> {{$faxdetails->geha_ekhtesas}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><span>جهه الفاكس  : </span> {{$faxdetails->geha_fax}}</p>
                </div>
                <div class="col-md-4">
                    <p><span> وجهه الفاكس   : </span> {{($faxdetails->waght_fax) ? 'وارد' : 'صادر'  }}</p>
                </div>
                <div class="col-md-4">
                    <p><span>  رقم صادر الجهه  : </span> {{$faxdetails->sader_elgeha_number}}</p>
                </div>
            </div>
        </div>


    </div>

    <div class="mt-4">
        <div class="product-desc">
            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">محتوى الفاكس :</a>
                </li>
            </ul>
            <div class="tab-content border border-top-0 p-4">
                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-9 col-md-10">
                            <div class="text-muted p-2">
                                <p><?php echo  nl2br($faxdetails->description) ?> </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>



