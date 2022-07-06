{{-- Additional --}}
@if($WebmasterSection->additional_fee_status)
    <div class="tab-pane " id="tab_additional">
    <input type="hidden" name="tab_name" value='tab_additional' />
        <div class="box-body">
                <div class="row">
                <div class="split-col-lg">                       
                        <div class="tit-hightlight">Set Your Pricings:</div> 
                        <?php  $count = 0; 
                       
                        //  echo '<pre>';
                        // print_r($Selected_Fee);
                        // echo '</pre>' ;
                        
                        ?>   
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
                            
                            $sfee = $Selected_Fee->firstWhere('fee_name',$title);
                           // print_r($sfee )           

                            ?>
                            
                            
                            <div class="col-md-15 bord-focus">
                                <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="{{ $title }}" class="form-label add-fee-form-lab">{{ $title }}</label>
                                    <input type="hidden" name="{{ $addfeehidden }}" value="{{ $title }}" />
                                </div>
                                <div class="col-sm-3">                           
                                        <select name="{{$addfeeselect}}" id='{{$addfeeselect}}' class="form-control dynamic_additional_fees" >
                                            <option value="0">Included</option>   
                                            @if (isset($sfee))     
                                                @if ($sfee->fee_text==1)
                                                <option selected="selected" value="1">Paid Service</option>
                                                @else
                                                    <option value="1">Paid Service</option>
                                                @endif
                                            @else
                                                <option value="1">Paid Service</option>
                                            @endif
                                        </select>
                                </div>

                                @if (isset($sfee))
                                    @if ($sfee->fee_text==1)
                                        <div class="col-sm-3 add-fees" id='{{$addfeeseclectdiv}}'>
                                    @else                                
                                        <div class="col-sm-3 add-fees" style='display:none;' id='{{$addfeeseclectdiv}}'>
                                    @endif
                                @else                                
                                    <div class="col-sm-3 add-fees" style='display:none;' id='{{$addfeeseclectdiv}}'>
                                @endif
                              
                                    <div class="input-group m-bot15">
                                            <span class="input-group-addon">RM</span>
                                            @if (isset($sfee))
                                                <input type="number" name="{{$addfeeseclectdivtext}}" value="{{$sfee->fee_value}}"  placeholder="Price for{{ $title }} (per hour)" class="form-control">
                                            @else                                
                                                <input type="number" name="{{$addfeeseclectdivtext}}"   placeholder="Price for{{ $title }} (per hour)" class="form-control">
                                            @endif
                                            <span class="input-group-addon ">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                        @endforeach
            
                        <input type="hidden" name="additional_field" value='{{$count}}' />
                    </div>     
                    <div class="split-col-sm">
                        {!! Form::hidden('section_id',$Topics->webmaster_id) !!}
                        {!! Form::hidden('topic_id',$Topics->id) !!}
                        @if(!$Selected_Include->isEmpty())  
                            @foreach ($Selected_Include as $inc)
                                    <?php
                                    
                                    $include_arr[] = $inc->fee_name;
                                    ?>
                            @endforeach
                        @else
                            <?php
                                $include_arr[] ='' ;
                            ?>
                        @endif
                
                        <div class="tit-hightlight">Highlight If you have:</div>
                        <div class="main-check have-options">
                        @foreach ($highlights as $hlight)        
                                    @if(isset($include_arr)) 
                                        <input type="checkbox" id="{{$hlight->$title_var}}"  name="include[]" value="{{$hlight->id}}"   {{ in_array($hlight->id, $include_arr) ? 'checked' : '' }} >
                                        <label for="{{$hlight->$title_var}}">{{$hlight->$title_var}}</label>                        
                                    @else                                       
                                        <input type="checkbox" id="{{$hlight->$title_var}}"  name="include[]" value="{{$hlight->id}}" >
                                        <label for="{{$hlight->$title_var}}">{{$hlight->$title_var}}</label>
                                    @endif
                        @endforeach
                        </div>
                    </div>
                        
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
            if (this.value == '1')
                $("#"+selected_id+"_div").show();
            else
                $("#"+selected_id+"_div").hide();
            });

            $('#btn_submit').on('click', function() {      
            alert("test");
            });
        });
    </script>
@endif
{{-- End of Additional --}}