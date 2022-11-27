<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from truelysell-admin.dreamguystech.com/template/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:19:23 GMT -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ZINWA</title>

        <link rel="shortcut icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/animate.min.css">

        <link rel="stylesheet" href="assets/css/select2.min.css">

        <link rel="stylesheet" href="assets/css/admin.css">
    </head>

    <body>
        <div class="main-wrapper">




            <div class="sidebar" id="sidebar">
                <div class="sidebar-logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li >
                                <a href="dashboard"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                            </li>


                            <li>
                                <a href="payment"><i class="fas fa-wallet"></i> <span> Payments</span></a>
                            </li>

                            <li>
                                <a href="add_user"><i class="fas fa-user-plus"></i> <span>Add Meter</span></a>
                            </li>

                            <li class="active">
                                <a href="view"><i class="fas fa-users"></i> <span>View</span></a>
                            </li>



                        </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="page-wrapper">
                <div class="content container-fluid">
                  <div class="page-header">
                    <div class="row">
                      <div class="col">
                        <h3 class="page-title">Parcel Data</h3>

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          {{-- <h4 class="card-title">Default Datatable</h4> --}}
                          <p class="card-text">
                           Viewing data
                          </p>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="datatable table table-stripped">
                              <thead>
                                <tr>
                                  <th>Meter</th>
                                  <th>Owner</th>
                                  <th>Coordinates</th>
                                  <th>Address</th>
                                  <th>Reading</th>
                                  <th>Amount Due</th>

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>3742</td>
                                  <td>George Mukumba</td>
                                  <td>-17.79</td>
                                  <td>66 Eves Ashdown Park</td>
                                  <td>123</td>
                                  <td>$320,800</td>
                                </tr>
                                {{-- <tr>
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
                                </tr> --}}
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/datatables.min.js"></script>

        <script src="assets/js/select2.min.js"></script>

        <script src="assets/js/admin.js"></script>
    </body>

    <!-- Mirrored from truelysell-admin.dreamguystech.com/template/form-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 04:19:23 GMT -->

    </html>
    </x-app-layout>