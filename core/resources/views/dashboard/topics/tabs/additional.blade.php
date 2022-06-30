{{-- Additional --}}
@if($WebmasterSection->additional_fee_status)
    <div class="tab-pane " id="tab_additional">
        <div class="box-body">
                <div class="row">
                    <div class="tit-hightlight">Highlight If you have:</div>
                                    
                                    <div class="main-check have-options">
                                        <input type="checkbox" id="incbrkfast" name="includebrkfast" value="Free Gifts Included">
                                        <label for="incbrkfast">Includes Free Gifts</label>
                        
                                        <input type="checkbox" id="incwifi" name="incwifi" value="Wifi Included">
                                        <label for="incwifi">Includes Free Wifi</label>
                        
                                        <input type="checkbox" id="incpark" name="incpark" value="Car park Included">
                                        <label for="incpark">Includes Free Car Parking</label>
                                    </div>
                                    <div class="tit-hightlight"></div>
                    <div class="tit-hightlight">Set Your Pricings:</div> 
                    <?php  $count = 0; ?>
                    @foreach ($Additional as $Additionalfee)
                        <?php
                        $addfeehidden="addfeehidden_".$count;
                        $addfeeselect="addfeeselect_".$count;
                        $addfeeseclectdiv="addfeeselect_".$count."_div";
                        $addfeeseclectdivtext="addfeeselectdivtext_".$count;
                        if ($Additionalfee->$title_var != "") {
                            $title = $Additionalfee->$title_var;
                            $select = strtolower(str_replace(' ', '_', $Additionalfee->$title_var));
                        } else {
                            $title = $Additionalfee->$title_var2;
                            $select = strtolower(str_replace(' ', '_', $Additionalfee->$title_var));
                        }
                        $select_text = strtolower(str_replace(' ', '_', $Additionalfee->$title_var))."_text";  
                        $select_div = strtolower(str_replace(' ', '_', $Additionalfee->$title_var))."_div";  
                        $count++;
                           ?>
                        <div class="col-md-4 bord-focus">
                            <div class="form-group">
                                <label for="{{ $title }}" class="form-label add-fee-form-lab">{{ $title }}</label>
                                <input type="hidden" name="{{ $addfeehidden }}" value="{{ $title }}" />
                                <div class="arrow-aft">
                                    <select name="{{$addfeeselect}}" id='{{$addfeeselect}}' class="dynamic_additional_fees" >
                                        <option value="0">Included</option>                   
                                        <option value="2">Paid, Included</option>
                                    </select>
                                </div>
                                <div class="add-fees" style='display:none;' id='{{$addfeeseclectdiv}}'>Price for{ { $title }} (per hour)
                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon">RM</span>
                                        <input type="number" name="{{$addfeeseclectdivtext}}" class="form-control">
                                        <span class="input-group-addon ">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="purpose" value='{{$count}}' />
                       
                    @endforeach
                </div> 
        </div>
    </div>
    <script type="text/javascript">           
        /* 2nd */
        $(document).ready(function(){
            $('.dynamic_additional_fees').on('change', function() {      
            selected_id = this.id; 
          //  alert(selected_id)
         //   alert(this.value)
            if (this.value == '2')
                $("#"+selected_id+"_div").show();
            else
                $("#"+selected_id+"_div").hide();
            });
        });
    </script>
@endif
{{-- End of Additional --}}