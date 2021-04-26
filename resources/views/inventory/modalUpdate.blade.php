<div class="basic-form-area mg-b-15">
   <div class="container-fluid">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         <div class="sparkline11-list responsive-mg-b-30">
            <div class="sparkline11-hd">
            </div>
            <div class="sparkline11-graph">
               <div class="basic-login-form-ad">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="zoomInDownInventoryUpd{{$inventory->id}}" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                 </div>
                                 <div class="modal-body">
                                    <div class="modal-login-form-inner">
                                       <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                             <div class="basic-login-inner modal-basic-inner">
                                          
                                                <h3>UPDATE DEVICE</h3>
                                                <form  action="{{ url('Inventory/EditItem/'.$inventory->id) }}" method="POST">
                                                   {{ csrf_field() }}
                                                 
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                          
                                                                 
                                                    
                                                            <label class="login2">Section</label>
                                                            <div class="form-select-list">
                                                               <select class="form-control custom-select-value" name="section" id="section">
                                                                  <option value="{{ $inventory->section }}">{{ $inventory->section }}</option>
                                                                  <option value="SECCION A">SECCION A</option>
                                                                  <option value="SECCION B">SECCION B</option>
                                                                  <option value="SECCION C">SECCION C</option>
                                                                  <option value="SECCION D">SECCION D</option>
                                                                  <option value="SECCION E">SECCION E</option>
                                                                  <option value="SECCION F">SECCION F</option>
                                                                  <option value="SECCION G">SECCION G</option>
                                                                  <option value="SECCION H">SECCION H</option>
                                                                  <option value="SECCION I">SECCION I</option>
                                                                  <option value="SECCION J">SECCION J</option>
                                                                  <option value="SECCION K">SECCION K</option>
                                                                  <option value="SECCION L">SECCION L</option>
                                                                  <option value="SECCION M">SECCION M</option>
                                                                  <option value="SECCION N">SECCION N</option>
                                                                  <option value="SECCION O">SECCION I</option>
                                                                  <option value="SECCION P">SECCION P</option>
                                                                  <option value="SECCION Q">SECCION Q</option>
                                                                  <option value="SECCION R">SECCION R</option>
                                                                  <option value="SECCION S">SECCION S</option>
                                                                  <option value="SECCION T">SECCION T</option>
                                                                  <option value="SECCION U">SECCION U</option>
                                                                  <option value="SECCION V">SECCION V</option>
                                                                  <option value="SECCION W">SECCION W</option>
                                                                  <option value="SECCION X">SECCION X</option>
                                                                  <option value="SECCION Y">SECCION Y</option>
                                                                  <option value="SECCION Z">SECCION Z</option>
                                                                  <option value="RACK1">RACK1</option>
                                                                  <option value="RACK2">RACK2</option>
                                                                  <option value="RACK3">RACK3</option>
                                                                  <option value="RACK4">RACK4</option>
                                                                  <option value="RACK5">RACK5</option>
                                                                  <option value="RACK6">RACK6</option>
                                                                  <option value="RACK7">RACK7</option>
                                                                  <option value="RACK8">RACK8</option>
                                                                  <option value="RACK9">RACK9</option>
                                                                  <option value="RACK10">RACK10</option>
                                                                  <option value="RACK11">RACK11</option>
                                                                  <option value="RACK12">RACK12</option>
                                                                  <option value="RACK13">RACK13</option>
                                                                  <option value="RACK14">RACK14</option>
                                                                  <option value="RACK15">RACK15</option>
                                                                  <option value="RACK16">RACK16</option>
                                                                  <option value="RACK17">RACK17</option>
                                                                  <option value="RACK18">RACK18</option>
                                                                  <option value="RACK19">RACK19</option>
                                                                  <option value="RACK20">RACK20</option>
                                                                  <option value="RACK21">RACK21</option>
                                                                  <option value="RACK22">RACK22</option>
                                                                  <option value="RACK23">RACK23</option>
                                                                  <option value="RACK24">RACK24</option>
                                                                  <option value="RACKPRINCIPAL">RACKPRINCIPAL</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Position</label>
                                                            <input type="text" name="position" id="position" class="form-control" placeholder="Ej: A1"  value="{{$inventory->position}}" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                         <label class="login2">State</label>
                                                            <input type="text" class="form-control" name="state" id="state"  value="{{ $inventory->state }}" readonly>
                                                         </div>
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Product</label>
                                                            <input type="text" class="form-control" name="product" id="product" value="{{ $inventory->product }}" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">PDR/PID</label>
                                                            <input type="text" class="form-control" name="pdrpid" id="pdrpid" value="{{ $inventory->pdrpid }}" />
                                                         </div>
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Serial</label>
                                                            <input type="text" class="form-control" name="serial" id="serial" value="{{ $inventory->serial }}" />
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Code</label>
                                                            <input type="text" class="form-control" name="code" id="code" value="{{ $inventory->code }}"/>
                                                         </div>
                                                         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="hidden" class="form-control" name="channel" id="channel" value="{{ $inventory->channel }}"/>
                                                         </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                      <div class="row">
                                                         <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2">Observation</label>
                                                            <textarea type="text" class="form-control" name="observation" id="observation" value="">{{ $inventory->observation }}</textarea>
                                                         </div>
                                                      </div>
                                                   </div>
                                           
                                                   <div class="login-btn-inner">
                                                      <div class="row">
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="login-horizental">
                                                               <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update Data</button>
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
            </div>
        </div>
    </div>
</div>
