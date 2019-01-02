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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
        <!-- Styles -->
        <style>
            tfoot input {
                width: 100%;
                padding: 3px;
                box-sizing: border-box;
            }

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

    {{--$("#posts").on("click", "th", function(e) {
                            var index = $(this).index();
                            console.log(index);
                            var table = $(this).closest("table");
                            console.log(table.find("#header th").eq(index).text());
                            var defaultSelected = index;
                            table.siblings().find("#header th").find("a.filter-icon").remove();
                            if (table.find("#header th").find(".filter-icon").length == 0) {
                                table.find("#header th").first().append(`<a class="filter-icon" href="#myModal" data-backdrop="false" data-toggle="modal"><span class="glyphicon glyphicon-filter campaign-header"></span></a>`);
                            }
                            $(".campaign-header").on("click", function(){
                                        $(".example").append(`
                                            <div id="myModal" class="modal fade Report-V2modal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Filter column</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="comment">
                                                            <div class="table-controls">
                                                            <span>
                                                                      <label>Field: </label>
                                                                      <select id="filter-field" class="form-control">

                                                                      </select>
                                                                    </span>
                                                                    <span>
                                                                      <label>Type: </label>
                                                                      <select id="filter-type" class="form-control">
                                                                          <option value="=">=</option>
                                                                          <option value="<">&lt;</option>
                                                                          <option value="<=">&lt;=</option>
                                                                          <option value=">">&gt;</option>
                                                                          <option value=">=">&gt;=</option>
                                                                          <option value="!=">!=</option>
                                                                          <option value="like">like</option>
                                                                      </select>
                                                                    </span>
                                                                    <span><label>Value: </label> <input id="filter-value" type="text" placeholder="value to filter" class="form-control"></span>
                                                                        <div class="modal-footer">
                                                                            <button id="filter-clear" type="button" class="btn btn-default" data-dismiss="modal">Clear Filter</button>
                                                                            <button id="filter-ok" type="button" class="btn btn-primary" data-dismiss="modal">Filter</button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            `);
                                            $("#filter-field").children().remove();
                                            /*for(let c in keyValue){
                                                $("#filter-field").append($("<option>",{value: c,text: keyValue[c]}))
                                            }*/
                                            var $filterIndex = 0;
                                            $.each(keyValue, function(key, value) {
                                               $("#filter-field")
                                                .append($("<option>",{ value: $filterIndex})
                                                .text(value));
                                               //field.push($filterIndex);
                                                //console.log(Options[c]);
                                                $filterIndex = $filterIndex + 1;
                                            });

                                            $("#filter-field").val(defaultSelected);
                                            //getTableFilter();
                                                });
                        });--}}


    <body>
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
        </tr>
        <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>$86,000</td>
        </tr>
        <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012/03/29</td>
            <td>$433,060</td>
        </tr>
        <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$162,700</td>
        </tr>
        <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012/12/02</td>
            <td>$372,000</td>
        </tr>
        <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012/08/06</td>
            <td>$137,500</td>
        </tr>
        <tr>
            <td>Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010/10/14</td>
            <td>$327,900</td>
        </tr>
        <tr>
            <td>Colleen Hurst</td>
            <td>Javascript Developer</td>
            <td>San Francisco</td>
            <td>39</td>
            <td>2009/09/15</td>
            <td>$205,500</td>
        </tr>
        <tr>
            <td>Sonya Frost</td>
            <td>Software Engineer</td>
            <td>Edinburgh</td>
            <td>23</td>
            <td>2008/12/13</td>
            <td>$103,600</td>
        </tr>
        <tr>
            <td>Jena Gaines</td>
            <td>Office Manager</td>
            <td>London</td>
            <td>30</td>
            <td>2008/12/19</td>
            <td>$90,560</td>
        </tr>
        <tr>
            <td>Quinn Flynn</td>
            <td>Support Lead</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2013/03/03</td>
            <td>$342,000</td>
        </tr>
        <tr>
            <td>Charde Marshall</td>
            <td>Regional Director</td>
            <td>San Francisco</td>
            <td>36</td>
            <td>2008/10/16</td>
            <td>$470,600</td>
        </tr>
        <tr>
            <td>Haley Kennedy</td>
            <td>Senior Marketing Designer</td>
            <td>London</td>
            <td>43</td>
            <td>2012/12/18</td>
            <td>$313,500</td>
        </tr>
        <tr>
            <td>Tatyana Fitzpatrick</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>19</td>
            <td>2010/03/17</td>
            <td>$385,750</td>
        </tr>
        <tr>
            <td>Michael Silva</td>
            <td>Marketing Designer</td>
            <td>London</td>
            <td>66</td>
            <td>2012/11/27</td>
            <td>$198,500</td>
        </tr>
        <tr>
            <td>Paul Byrd</td>
            <td>Chief Financial Officer (CFO)</td>
            <td>New York</td>
            <td>64</td>
            <td>2010/06/09</td>
            <td>$725,000</td>
        </tr>
        <tr>
            <td>Gloria Little</td>
            <td>Systems Administrator</td>
            <td>New York</td>
            <td>59</td>
            <td>2009/04/10</td>
            <td>$237,500</td>
        </tr>
        <tr>
            <td>Bradley Greer</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>41</td>
            <td>2012/10/13</td>
            <td>$132,000</td>
        </tr>
        <tr>
            <td>Dai Rios</td>
            <td>Personnel Lead</td>
            <td>Edinburgh</td>
            <td>35</td>
            <td>2012/09/26</td>
            <td>$217,500</td>
        </tr>
        <tr>
            <td>Jenette Caldwell</td>
            <td>Development Lead</td>
            <td>New York</td>
            <td>30</td>
            <td>2011/09/03</td>
            <td>$345,000</td>
        </tr>
        <tr>
            <td>Yuri Berry</td>
            <td>Chief Marketing Officer (CMO)</td>
            <td>New York</td>
            <td>40</td>
            <td>2009/06/25</td>
            <td>$675,000</td>
        </tr>
        <tr>
            <td>Caesar Vance</td>
            <td>Pre-Sales Support</td>
            <td>New York</td>
            <td>21</td>
            <td>2011/12/12</td>
            <td>$106,450</td>
        </tr>
        <tr>
            <td>Doris Wilder</td>
            <td>Sales Assistant</td>
            <td>Sidney</td>
            <td>23</td>
            <td>2010/09/20</td>
            <td>$85,600</td>
        </tr>
        <tr>
            <td>Angelica Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td>London</td>
            <td>47</td>
            <td>2009/10/09</td>
            <td>$1,200,000</td>
        </tr>
        <tr>
            <td>Gavin Joyce</td>
            <td>Developer</td>
            <td>Edinburgh</td>
            <td>42</td>
            <td>2010/12/22</td>
            <td>$92,575</td>
        </tr>
        <tr>
            <td>Jennifer Chang</td>
            <td>Regional Director</td>
            <td>Singapore</td>
            <td>28</td>
            <td>2010/11/14</td>
            <td>$357,650</td>
        </tr>
        <tr>
            <td>Brenden Wagner</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>28</td>
            <td>2011/06/07</td>
            <td>$206,850</td>
        </tr>
        <tr>
            <td>Fiona Green</td>
            <td>Chief Operating Officer (COO)</td>
            <td>San Francisco</td>
            <td>48</td>
            <td>2010/03/11</td>
            <td>$850,000</td>
        </tr>
        <tr>
            <td>Shou Itou</td>
            <td>Regional Marketing</td>
            <td>Tokyo</td>
            <td>20</td>
            <td>2011/08/14</td>
            <td>$163,000</td>
        </tr>
        <tr>
            <td>Michelle House</td>
            <td>Integration Specialist</td>
            <td>Sidney</td>
            <td>37</td>
            <td>2011/06/02</td>
            <td>$95,400</td>
        </tr>
        <tr>
            <td>Suki Burks</td>
            <td>Developer</td>
            <td>London</td>
            <td>53</td>
            <td>2009/10/22</td>
            <td>$114,500</td>
        </tr>
        <tr>
            <td>Prescott Bartlett</td>
            <td>Technical Author</td>
            <td>London</td>
            <td>27</td>
            <td>2011/05/07</td>
            <td>$145,000</td>
        </tr>
        <tr>
            <td>Gavin Cortez</td>
            <td>Team Leader</td>
            <td>San Francisco</td>
            <td>22</td>
            <td>2008/10/26</td>
            <td>$235,500</td>
        </tr>
        <tr>
            <td>Martena Mccray</td>
            <td>Post-Sales support</td>
            <td>Edinburgh</td>
            <td>46</td>
            <td>2011/03/09</td>
            <td>$324,050</td>
        </tr>
        <tr>
            <td>Unity Butler</td>
            <td>Marketing Designer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/12/09</td>
            <td>$85,675</td>
        </tr>
        <tr>
            <td>Howard Hatfield</td>
            <td>Office Manager</td>
            <td>San Francisco</td>
            <td>51</td>
            <td>2008/12/16</td>
            <td>$164,500</td>
        </tr>
        <tr>
            <td>Hope Fuentes</td>
            <td>Secretary</td>
            <td>San Francisco</td>
            <td>41</td>
            <td>2010/02/12</td>
            <td>$109,850</td>
        </tr>
        <tr>
            <td>Vivian Harrell</td>
            <td>Financial Controller</td>
            <td>San Francisco</td>
            <td>62</td>
            <td>2009/02/14</td>
            <td>$452,500</td>
        </tr>
        <tr>
            <td>Timothy Mooney</td>
            <td>Office Manager</td>
            <td>London</td>
            <td>37</td>
            <td>2008/12/11</td>
            <td>$136,200</td>
        </tr>
        <tr>
            <td>Jackson Bradshaw</td>
            <td>Director</td>
            <td>New York</td>
            <td>65</td>
            <td>2008/09/26</td>
            <td>$645,750</td>
        </tr>
        <tr>
            <td>Olivia Liang</td>
            <td>Support Engineer</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2011/02/03</td>
            <td>$234,500</td>
        </tr>
        <tr>
            <td>Bruno Nash</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>38</td>
            <td>2011/05/03</td>
            <td>$163,500</td>
        </tr>
        <tr>
            <td>Sakura Yamamoto</td>
            <td>Support Engineer</td>
            <td>Tokyo</td>
            <td>37</td>
            <td>2009/08/19</td>
            <td>$139,575</td>
        </tr>
        <tr>
            <td>Thor Walton</td>
            <td>Developer</td>
            <td>New York</td>
            <td>61</td>
            <td>2013/08/11</td>
            <td>$98,540</td>
        </tr>
        <tr>
            <td>Finn Camacho</td>
            <td>Support Engineer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/07/07</td>
            <td>$87,500</td>
        </tr>
        <tr>
            <td>Serge Baldwin</td>
            <td>Data Coordinator</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2012/04/09</td>
            <td>$138,575</td>
        </tr>
        <tr>
            <td>Zenaida Frank</td>
            <td>Software Engineer</td>
            <td>New York</td>
            <td>63</td>
            <td>2010/01/04</td>
            <td>$125,250</td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td>$115,000</td>
        </tr>
        <tr>
            <td>Jennifer Acosta</td>
            <td>Junior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>43</td>
            <td>2013/02/01</td>
            <td>$75,650</td>
        </tr>
        <tr>
            <td>Cara Stevens</td>
            <td>Sales Assistant</td>
            <td>New York</td>
            <td>46</td>
            <td>2011/12/06</td>
            <td>$145,600</td>
        </tr>
        <tr>
            <td>Hermione Butler</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>47</td>
            <td>2011/03/21</td>
            <td>$356,250</td>
        </tr>
        <tr>
            <td>Lael Greer</td>
            <td>Systems Administrator</td>
            <td>London</td>
            <td>21</td>
            <td>2009/02/27</td>
            <td>$103,500</td>
        </tr>
        <tr>
            <td>Jonas Alexander</td>
            <td>Developer</td>
            <td>San Francisco</td>
            <td>30</td>
            <td>2010/07/14</td>
            <td>$86,500</td>
        </tr>
        <tr>
            <td>Shad Decker</td>
            <td>Regional Director</td>
            <td>Edinburgh</td>
            <td>51</td>
            <td>2008/11/13</td>
            <td>$183,000</td>
        </tr>
        <tr>
            <td>Michael Bruce</td>
            <td>Javascript Developer</td>
            <td>Singapore</td>
            <td>29</td>
            <td>2011/06/27</td>
            <td>$183,000</td>
        </tr>
        <tr>
            <td>Donna Snider</td>
            <td>Customer Support</td>
            <td>New York</td>
            <td>27</td>
            <td>2011/01/25</td>
            <td>$112,000</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </tfoot>
    </table>
    </body>

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#example').DataTable();

        // Apply the search
        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
</script>


</html>
