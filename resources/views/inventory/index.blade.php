@extends('layouts.design')
@section('content')<br><br>
<hr>
<div class="containerTables" style="position: absolute; margin-top: 0; ">

<div class="all-content-wrapper ">
   <div class="data-table-area mg-b-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="sparkline13-list">
                  <div class="sparkline13-hd">
                     <div class="main-sparkline13-hd">
                        <h1>Inventory <span class="table-project-n">Data</span> Table</h1>
                     </div>
                  </div>
                  <div class="sparkline13-graph">
                     <div class="datatable-dashv1-list custom-datatable-overright">
                        <div id="toolbar">
                           <i class="fa fa-folder-plus iconColorBlue" style="font-size: 24px; float: right;" data-toggle="modal" data-target="#zoomInDownAddInventary"></i>
                        </div>
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                           data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                           <thead>
                              <tr>
                                 <th></th>
                                 <th data-field="plus">Lend</th>
                                 <th data-field="section" data-editable="true">Section</th>
                                 <th data-field="email" data-editable="true">Position</th>
                                 <th data-field="phone" data-editable="true">State</th>
                                 <th data-field="complete">Product</th>
                                 <th data-field="task" data-editable="true">Pdr/pid</th>
                                 <th data-field="date" data-editable="true">Serial</th>
                                 <th data-field="code" data-editable="true">Code</th>
                                 <th data-field="channel" data-editable="true">Channel</th>
                                 <th data-field="observation" data-editable="true">Observation</th>
                                 <th data-field="action">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($inventory as $inventory)
                              <tr>
                                    
                                 <td><input type="checkbox"></td>
                                    
                                 <td>@if($inventory->state=='available')
                                 <i class="far fa-handshake iconColorBlue" data-toggle="modal" data-target="#zoomInDownLoan{{ $inventory->id }}"></i>
                                 @else
                                 Taken
                                 @endif
                                 </td>
                                 <td>{{ $inventory->section }}</td>
                                 <td>{{ $inventory->position }}</td>
                                 <td>{{ $inventory->state }}</td>
                                 <td>{{ $inventory->product }}</td>
                                 <td>{{ $inventory->pdrpid }}</td>
                                 <td>{{ $inventory->serial }}</td>
                                 <td>{{ $inventory->code }}</td>
                                 <td>{{ $inventory->nchannel }}</td>
                                 <td>{{ $inventory->observation }}</td>
                               
                                 <td><i class="fa fa-pencil iconColorBlue" data-toggle="modal" data-target="#zoomInDownInventoryUpd{{ $inventory->id }}">Edit</i><br>
                                     <i class="far fa-trash-alt iconColorBlue" data-toggle="modal" data-target="#DangerModalDelete"> Delete</i></strong>
                                 
                                    @include('inventory.modalUpdate')    
                                 
                                   
                                   
                                 </td>   
                                 @include('inventory.modalLoan') 
                              </tr>
                              @endforeach

                           

                           </tbody>
                           

                        </table>
                   
                     </div>
                     @include('inventory.modalAdd')
                     @include('inventory.modalLoan')
                   
                  </div>
                  
               </div>
            </div>
         </div>
       
      </div>
     
   </div>
   
   <!-- Modal Eliminar Inventario -->
 
</div>
@endsection