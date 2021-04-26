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
                                <div id="zoomInDownLoan{{ $inventory->id }}"
                                    class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i
                                                        class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-login-form-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="basic-login-inner modal-basic-inner">
                                                                <h3>Lend Device</h3>
                                                                <form
                                                                    action="{{ url('/Inventory/UpdAddLoan/' . $inventory->id) }}"
                                                                    method="POST" id="formulario" class="formulario" >
                                                                    {{ csrf_field() }}
                                                                    <div class="form-group-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12"
                                                                                hidden>
                                                                                <label class="login2">Id Inv</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="idInv" id="idInv"
                                                                                    value="{{ $inventory->id }}" />
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                                                <div class="formulario__grupo"
                                                                                    id="grupo__idloan">
                                                                                    <label for="idloan"
                                                                                        class="formulario__label">Id
                                                                                        Loan</label>
                                                                                    <div
                                                                                        class="formulario__grupo-input">
                                                                                        <input type="text" name="idloan"
                                                                                            id="idloan"
                                                                                            class="formulario__input" />
                                                                                        <i
                                                                                            class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                                    </div>
                                                                                    <p class="formulario__input-error">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                                                <label class="login2">Devices Borrowed
                                                                                    PID</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="pdrpid" id="pdrpid"
                                                                                    value="{{ $inventory->pdrpid }}"
                                                                                    readonly />
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                                                <label class="login2">Channel</label>
                                                                                <div class="form-select-list">
                                                                                    <select
                                                                                        class="form-control custom-select-value"
                                                                                        name="channel">
                                                                                        @foreach ($channels as $channels)
                                                                                            <option
                                                                                                value="{{ $channels->id }}">
                                                                                                {{ $channels->nchannel }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group-inner">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                <div class="formulario__grupo"
                                                                                    id="grupo__dateloan">
                                                                                    <label for="dateloan"
                                                                                        class="formulario__label">Loan
                                                                                        Date</label>
                                                                                    <div
                                                                                        class="formulario__grupo-input">
                                                                                        <input type="date"
                                                                                            class="formulario__input"
                                                                                            name="dateloan"
                                                                                            id="dateloan" />
                                                                                        <i
                                                                                            class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                                    </div>
                                                                                    <p class="formulario__input-error">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                <div class="formulario__grupo"
                                                                                    id="grupo__estimateddate">
                                                                                    <label for="estimateddate"
                                                                                        class="formulario__label">Estimate
                                                                                        Return</label>
                                                                                    <div
                                                                                        class="formulario__grupo-input">
                                                                                        <input type="date"
                                                                                            class="formulario__input"
                                                                                            name="estimateddate"
                                                                                            id="estimateddate" />
                                                                                        <i
                                                                                            class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                                    </div>
                                                                                    <p class="formulario__input-error">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                                                    <label
                                                                                        class="login2">Returned</label>
                                                                                    <div class="form-select-list">
                                                                                        <select
                                                                                            class="form-control custom-select-value"
                                                                                            name="return" readonly>
                                                                                            <option>YES</option>
                                                                                            <option>No</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                                                    <label class="login2">State</label>
                                                                                    <div class="form-select-list">
                                                                                        <select
                                                                                            class="form-control custom-select-value"
                                                                                            name="state" id="state"
                                                                                            readonly>
                                                                                            <option value="available">
                                                                                                Available</option>
                                                                                            <option value="taken">Taken
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                                                    <label class="login2">Serial</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="serial" id="serial"
                                                                                        value="{{ $inventory->serial }}"
                                                                                        readonly />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                                                <div class="formulario__grupo"
                                                                                    id="grupo__observations">
                                                                                    <label for="observations"
                                                                                        class="formulario__label">Observation</label>
                                                                                    <div
                                                                                        class="formulario__grupo-textarea">
                                                                                        <textarea type="text"
                                                                                            id="observations"
                                                                                            class="formulario__input"
                                                                                            name="observations"
                                                                                            placeholder=""></textarea>
                                                                                        <i
                                                                                            class="formulario__validacion-estado fas fa-times-circle"></i>
                                                                                    </div>
                                                                                    <p class="formulario__input-error">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                <div class="login-horizental">
                                                                                    <button
                                                                                        class="btn btn-sm btn-primary login-submit-cs"
                                                                                        style="float: left;"
                                                                                        type="submit">Add
                                                                                        Channel</button>
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
                <script src="{{ asset('js/form-validation/form-loan.js')}}"></script>
            </div>
            {{--<script src="{{ asset('js/form-validation/form-loan.js')}}"></script>--}}