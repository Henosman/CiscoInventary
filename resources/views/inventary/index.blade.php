@extends('layouts.design')

@section('content')
 <!-- Static Table Start -->
 


 
<div class="all-content-wrapper">
 <div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                       <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline11-list responsive-mg-b-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                   
                                    <div class="modal-bootstrap modal-login-form">
                                                <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Modal Test</a>
                                            </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <br><div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Task</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="phone" data-editable="true">Phone</th>
                                        <th data-field="date" data-editable="true">Date</th>
                                        <th data-field="price" data-editable="true">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>Web Development</td>
                                        <td>admin@uttara.com</td>
                                        <td>+8801962067309</td>
                                        <td>Jul 14, 2017</td>
                                        <td>$5455</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>fox@itpark.com</td>
                                        <td>+8801762067304</td>
                                        <td>fab 2, 2017</td>
                                        <td>$8756</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>3</td>
                                        <td>Software Development</td>
                                        <td>gumre@hash.com</td>
                                        <td>+8801862067308</td>
                                        <td>Seb 5, 2017</td>
                                        <td>$9875</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>4</td>
                                        <td>Woocommerce</td>
                                        <td>kyum@frok.com</td>
                                        <td>+8801962066547</td>
                                        <td>Oct 10, 2017</td>
                                        <td>$3254</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>5</td>
                                        <td>Joomla</td>
                                        <td>jams@game.com</td>
                                        <td>+8801962098745</td>
                                        <td>Nov 20, 2017</td>
                                        <td>$58745</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>6</td>
                                        <td>Wordpress</td>
                                        <td>flat@yem.com</td>
                                        <td>+8801962254781</td>
                                        <td>Aug 25, 2017</td>
                                        <td>$789879</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>7</td>
                                        <td>Ecommerce</td>
                                        <td>hasan@wpm.com</td>
                                        <td>+8801962254863</td>
                                        <td>July 17, 2017</td>
                                        <td>$21424</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>8</td>
                                        <td>Android Apps</td>
                                        <td>ATM@devep.com</td>
                                        <td>+8801962875469</td>
                                        <td>June 11, 2017</td>
                                        <td>$78978</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>9</td>
                                        <td>Prestashop</td>
                                        <td>presta@Prest.com</td>
                                        <td>+8801962067524</td>
                                        <td>May 9, 2017</td>
                                        <td>$45645</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>10</td>
                                        <td>Game Development</td>
                                        <td>Dev@game.com</td>
                                        <td>+8801962067457</td>
                                        <td>April 5, 2017</td>
                                        <td>$4564545</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>11</td>
                                        <td>Angular Js</td>
                                        <td>gular@angular.com</td>
                                        <td>+8801962067124</td>
                                        <td>Dec 1, 2017</td>
                                        <td>$645455</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>12</td>
                                        <td>Opencart</td>
                                        <td>open@cart.com</td>
                                        <td>+8801962067587</td>
                                        <td>Jan 6, 2017</td>
                                        <td>$78978</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>13</td>
                                        <td>Education</td>
                                        <td>john@example.com</td>
                                        <td>+8801962067471</td>
                                        <td>Feb 6, 2016</td>
                                        <td>$456456</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>14</td>
                                        <td>Construction</td>
                                        <td>mary@example.com</td>
                                        <td>+8801962012457</td>
                                        <td>Jan 6, 2016</td>
                                        <td>$87978</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>15</td>
                                        <td>Real Estate</td>
                                        <td>july@example.com</td>
                                        <td>+8801962067309</td>
                                        <td>Dec 1, 2016</td>
                                        <td>$454554</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>16</td>
                                        <td>Personal Regume</td>
                                        <td>john@example.com</td>
                                        <td>+8801962067306</td>
                                        <td>May 9, 2016</td>
                                        <td>$564555</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>17</td>
                                        <td>Admin Template</td>
                                        <td>mary@example.com</td>
                                        <td>+8801962067305</td>
                                        <td>June 11, 2016</td>
                                        <td>$454565</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>18</td>
                                        <td>FrontEnd</td>
                                        <td>july@example.com</td>
                                        <td>+8801962067304</td>
                                        <td>May 9, 2015</td>
                                        <td>$456546</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>19</td>
                                        <td>Backend</td>
                                        <td>john@range.com</td>
                                        <td>+8801962067303</td>
                                        <td>Feb 9, 2014</td>
                                        <td>$564554</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>20</td>
                                        <td>Java Advance</td>
                                        <td>lamon@ghs.com</td>
                                        <td>+8801962067302</td>
                                        <td>July 6, 2014</td>
                                        <td>$789889</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>21</td>
                                        <td>Jquery Advance</td>
                                        <td>hasad@uth.com</td>
                                        <td>+8801962067301</td>
                                        <td>Jun 6, 2013</td>
                                        <td>$4565656</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->

<div class="sparkline11-graph">
   <div class="basic-login-form-ad">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                     </div>
                     <div class="modal-body">
                        <div class="modal-login-form-inner">
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="login-social-inner">
                                    <a href="#" class="button btn-social facebook span-left"> <span><i class="fa fa-facebook"></i></span> Facebook </a>
                                    <a href="#" class="button btn-social twitter span-left"> <span><i class="fa fa-twitter"></i></span> Twitter </a>
                                    <a href="#" class="button btn-social googleplus span-left"> <span><i class="fa fa-google-plus"></i></span> Google+ </a>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="basic-login-inner modal-basic-inner">
                                    <h3>Sign In</h3>
                                    <p>Register User can get sign in from here</p>
                                    <form action="#">
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Email</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="email" class="form-control" placeholder="Enter Email" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Password</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="password" class="form-control" placeholder="password" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="login-btn-inner">
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <label>
                                                <input type="checkbox" class="i-checks"> Remember me </label>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="login-horizental">
                                                   <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Sign In</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
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
   </div>
</div>


@endsection