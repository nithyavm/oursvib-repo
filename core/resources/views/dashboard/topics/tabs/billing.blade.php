{{-- Billing --}}
@if($WebmasterSection->billing_status)
<div class="tab-pane  {{ $tab_8 }}" id="tab_bill">
    <div class="box-body">
        <div class="form-group row">
            <label for="booking_type" class="col-sm-2 form-control-label">Booking Type</label>
                <div class="col-sm-10">  
                    <select class="form-control select2-multiple" id="booking"  ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>>
                        <option selected disabled>Select booking</option>
                        @foreach ($BookingType as $fatherSection)
                        <?php
                                            if ($fatherSection->$title_var != "") {
                                                $ftitle = $fatherSection->$title_var;
                                            } else {
                                                $ftitle = $fatherSection->$title_var2;
                                            }
                                            ?>
                                            <option value="{{ $fatherSection->id  }}">{!! $ftitle !!}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        
         <div class="form-group row">
            <label for="billing_type" class="col-sm-2 form-control-label">Billing Type</label>
                <div class="col-sm-10">  
                    <select class="orm-control select2-multiple" id="billing" ui-jp="select2"
                                                ui-options="{theme: 'bootstrap'}" required>
                    <option selected>Billing Type</option>
                    </select>
                </div>
         </div>
        
         <div class="form-group row">
            <label for="billing_type" class="col-sm-2 form-control-label">Billing Type2</label>
                <div class="col-sm-10">  
                    <select class="orm-control select2-multiple" id="billing" ui-jp="select2"
                                                ui-options="{theme: 'bootstrap'}" required>
                    <option selected>Billing Type2</option>
                    </select>
                </div>
         </div>

         <div class="form-group row">
            <label for="billing_type" class="col-sm-2 form-control-label">Set Price</label>
                <div class="col-sm-10">  
                {!! Form::text('set_price','', array('placeholder' => '','class' => 'form-control','id'=>'set_price')) !!}
                </div>
         </div>
         <div class="form-group row">
            <label for="billing_type" class="col-sm-2 form-control-label">Discount Price</label>
                <div class="col-sm-10">  
                {!! Form::text('discount_price','', array('placeholder' => '','class' => 'form-control','id'=>'discount_price')) !!}
                </div>
         </div>
    
         <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                            &#xe31b;</i> {!! __('backend.update') !!}</button>
                    <a href="{{ route('topics',$WebmasterSection->id) }}"
                       class="btn btn-default m-t"><i class="material-icons">
                            &#xe5cd;</i> {!! __('backend.cancel') !!}</a>
                </div>
            </div>
@endif

<script type="text/javascript">
        $(document).ready(function () {
            $('#booking').on('change', function () {
                var bookingId = this.value;
               // alert(bookingId);   
                $('#billing').html('');
                $.ajax({
                    url: "{{url('admin/getbilling')}}?father_id="+bookingId,
                    type: 'get',
                    success: function (res) {
                    //  console.log(JSON.stringify(res));
                        $('#billing').html('<option value=""></option>');
                        $.each(res, function (key, value) {
                            console.log(value);
                            $('#billing').append('<option value="' + value
                                .id + '">' + value.title_en+ '</option>');
                        });
                       
                    }
                });
            });
           
        });
    </script>
     </div>
 </div>
{{-- End of Billing --}}