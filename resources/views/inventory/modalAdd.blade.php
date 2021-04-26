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
                           <div id="zoomInDownAddInventary" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
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
                                                   <h3>Insert Data Device</h3>
                                                   <form action="{{ url('/Inventory/AddItem') }}" method="POST"  id="formulario" class="formulario" >
                                                      {{ csrf_field() }}
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__section">
                                                                  <label class="formulario__label">Section</label>
                                                                  <div class="form-select-list">
                                                                     <select class="form-control custom-select-value" name="section">
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
                                                            </div>
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__position">
                                                                  <label for="position" class="formulario__label">Position</label>
                                                                  <div class="formulario__grupo-input">
                                                                     <input type="text" name="position" id="position" class="formulario__input" placeholder="Ej: A1" />
                                                                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                  </div>
                                                                  <p class="formulario__input-error"></p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">State</label>
                                                               <div class="form-select-list">
                                                                  <select class="form-control custom-select-value" name="state">
                                                                     <option value="available">Available</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__product">
                                                                     <label for="product" class="formulario__label">Product</label>
                                                                     <div class="formulario__grupo-input">
                                                                        <input type="text" name="product"  id="product" class="formulario__input" placeholder="Ej: Modem" />
                                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                     </div>
                                                                  <p class="formulario__input-error"></p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__pdrpid">
                                                                     <label for="pdrpid" class="formulario__label">PDR/PID</label>
                                                                     <div class="formulario__grupo-input">
                                                                        <input type="text" id="pdrpid" class="formulario__input" name="pdrpid" placeholder="Ej: CP-7960G" />
                                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                     </div>
                                                                  <p class="formulario__input-error"></p>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__serial">
                                                                     <label for="serial" class="formulario__label">Serial</label>
                                                                  <div class="formulario__grupo-input">
                                                                     <input type="text" id="serial" class="formulario__input" name="serial" placeholder="" />
                                                                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                  </div>
                                                                  <p class="formulario__input-error"></p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__code">
                                                                  <label for="code" class="formulario__label">Code</label>
                                                                  <div class="formulario__grupo-input">
                                                                     <input type="text" id="code" class="formulario__input" name="code" placeholder="Ej: CP-7960G" />
                                                                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                  </div>
                                                                  <p class="formulario__input-error"></p>
                                                               </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                               <label class="login2">Channel</label>
                                                               <select name="channel" id="channel" class="form-control">
                                                                  @foreach ( $channels as $channels )
                                                                  <option value="{{$channels->id}}"> {{$channels->nchannel}} </option>
                                                                  @endforeach
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__grupo" id="grupo__observation">
                                                                  <label for="observation" class="formulario__label">Observation</label>
                                                                  <div class="formulario__grupo-textarea">
                                                                     <textarea type="text" id="observation" class="formulario__input" name="observation" placeholder=""></textarea>
                                                                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                  </div>
                                                                  <p class="formulario__input-error"></p>
                                                               </div>
                                                         </div>
                                                      </div>
                                                      <div class="login-btn-inner">
                                                         <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                               <div class="formulario__mensaje" id="formulario__mensaje">
                                                                  <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Please enter write full form</p>
                                                               </div>
                                                               <div class="formulario__grupo formulario__grupo-btn-enviar">
                                                                  <button class="formulario__btn" type="submit">Save Data</button>
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
            </div>
         </div>
      </div>
   </div>