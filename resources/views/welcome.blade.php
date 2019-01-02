<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"/>
        <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    {{--<body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>--}}


   {{-- <body>--}}
    {{--<div class="container">
        <div class="example">
            <select id="multiselect-campaign" class="selectpicker" multiple="multiple">
            </select>
        </div>

    </div>--}}
    {{--    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" id="posts">
                <thead>
                <tr>
                    <th rowspan="2">Account</th>
                    <th rowspan="2">Specialist</th>
                    <th rowspan="2">Source</th>
                    <th colspan="3">ROAS</th>
                    <th colspan="2">Budget</th>
                    <th colspan="2">Revenue</th>
                    <th rowspan="2">Google FeedBing Feed</th>
                </tr>
                <tr>
                    <th>Last Month</th>
                    <th>Goal</th>
                    <th>Month To Date</th>
                    <th>Goal</th>
                    <th>Month To DateProjection</th>
                    <th>Goal</th>
                    <th>Month To DateProjection</th>
                </tr>

                </thead>
                <tfoot>
                <tr>
                    <th>Account</th>
                    <th>Specialist</th>
                    <th>Source</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script>



        var keyValue = {campaign:"CAMPAIGN",conversions:"CONVERSIONS",change_conversions:"CHANGE",revenue:"REVENUE",change_revenue:"CHANGE",cost:"COST",change_cost:"CHANGE",roas:"ROAS",change_roas:"CHANGE",clicks:"CLICKS",change_clicks:"CHANGE"};
        var field = Object.keys(keyValue);


        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#posts tfoot th').each(function () {
               var title = $(this).text();
               //console.log(title);
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            });

            // DataTable
            var table = $('#posts').DataTable({
                "processing": true,
                "serverSide": true,
                "searching": false,
                "bInfo": false,
                "bLengthChange": false,
                //"bPaginate": false,
                "ajax":{
                    "url": "{{ url('allposts') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"}
                },
                "columns": [
                    { "data": "id" },
                    { "data": "title" },
                    { "data": "body" },
                    { "data": "created_at" },
                    { "data": "options" }
                ]

            });

            // Apply the search
            table.columns().every( function () {
                var that = this;
                console.log(that);
                $('input', this.footer() ).on( 'keyup change', function () {
                   if ( that.search() !== this.value ) {
                       that
                           .search( this.value )
                           .draw();
                   }
                   /*console.log(that
                       .search( this.value ));*/
                });
            });


            /*$('a.toggle-vis').on( 'click', function (e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column( $(this).attr('data-column') );

                // Toggle the visibility
                column.visible( ! column.visible() );
            } );*/
            /*function hideColumn(multiSelectTable,Options,AllField)
            {
                $optionIndex = 0;
                for(let c in Options){
                    $(multiSelectTable).append($("<option>",{value: $optionIndex,text: Options[c]}))
                    $optionIndex = $optionIndex + 1;
                }
                $(multiSelectTable).multiselect({
                    selectAllValue: 1,
                    includeSelectAllOption: true,
                    buttonWidth: 200,
                    nonSelectedText: "Select column to hide",
                    enableCaseInsensitiveFiltering: true,
                    onChange: function(element, checked) {
                        var columns = $(multiSelectTable + " option:selected");
                        var selected = [];
                        $(columns).each(function(index, column){
                            selected.push($(this).val());
                            if ($(this).val() == "All") {
                                console.log("all");
                            }
                            console.log(selected);
                            selected.forEach(function(hide) {
                                //table.hideColumn(hide);
                                // Get the column API object
                                //var column = table.column( $(this).attr('data-column') );
                                //console.log(table.settings().init().columns);
                                console.log(hide);
                                // Toggle the visibility
                                table.column(6).visible(false);
                            });
                        });
                        var unselectedColumns = $(multiSelectTable + " option:not(:selected)");
                        var unselected = [];
                        $(unselectedColumns).each(function(index, unselectedColumn){
                            unselected.push($(this).val());
                            unselected.forEach(function(show) {
                                //table.showColumn(show);
                                table.column(show).visible(true);
                            });
                        });
                    },
                    onSelectAll: function() {
                        AllField.forEach(function(hide) {
                            table.column(hide).visible(false);
                            //table.hideColumn(hide);
                        });
                    },
                    onDeselectAll: function() {
                        AllField.forEach(function(show) {
                            table.column(show).visible(false);
                            //table.showColumn(show);
                        });
                    }
                });
            }
            hideColumn("#multiselect-campaign",keyValue,field);*/
        });
    </script>
    </body>--}}


</html>
