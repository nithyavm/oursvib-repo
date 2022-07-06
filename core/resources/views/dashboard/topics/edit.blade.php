@extends('dashboard.layouts.master')
<?php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>

@section('title', $Topics->{"title_" . @Helper::currentLanguage()->code})

@section('content')
<div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
<div class="padding">
    <div class="box m-b-0">
        <div class="box-header dker">
                <?php
                $title_var = "title_" . @Helper::currentLanguage()->code;
                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                if ($WebmasterSection->$title_var != "") {
                    $WebmasterSectionTitle = $WebmasterSection->$title_var;
                } else {
                    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
                }
                ?>
                <h3><i class="material-icons">
                        &#xe3c9;</i> {{ __('backend.topicEdit') }} {!! $WebmasterSectionTitle !!}
                </h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ __('backend.home') }}</a> /
                    <a>{!! $WebmasterSectionTitle !!}</a>
                </small>
        </div>
        <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{ route('topics',$WebmasterSection->id) }}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
        </div>

    </div>

    <?php
        echo Session::get('activeTab');
       
        $tab_1 = "active";
        $tab_2 = "";
        $tab_3 = "";
        $tab_4 = "";
        $tab_5 = "";
        $tab_6 = "";
        $tab_7 = "";
        $tab_8 = "";
        $tab_9 = "";
        $tab_10 = "";
        $tab_11= "";
        $tab_12 = "";
        $tab_13 = "";
        $tab_14 = "";
        $tab_15 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "photos") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "active";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "comments") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "active";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "maps") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "active";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "files") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "active";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "related") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "active";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "bill") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "active";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "desc") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "active";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "additional") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "active";
                $tab_11 = "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "activity") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "active";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";

            }
            if (Session::get('activeTab') == "package") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "active";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "capacity") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "active";
                $tab_14 = "";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "ammenity") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "active";
                $tab_15 = "";
            }
            if (Session::get('activeTab') == "videos") {
                $tab_1 = "";
                $tab_2 = "";
                $tab_3 = "";
                $tab_4 = "";
                $tab_5 = "";
                $tab_6 = "";
                $tab_7 = "";
                $tab_8 = "";
                $tab_9 = "";
                $tab_10 = "";
                $tab_11= "";
                $tab_12 = "";
                $tab_13 = "";
                $tab_14 = "";
                $tab_15 = "active";
            }
        }
    ?>
    <div class="box nav-active-border b-info">
       
   
                            
                        

        <div class="tab-content clear b-t"> 
            {{Form::open(['route'=>['topicsUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id], 'name'=>'signup-form' ,  'id'=>'signup-form', 'method'=>'POST', 'files' => true])}}
                <h3>
                    <span class="icon"><i class="ti-user"></i></span>
                    <span class="title_text">Category</span>
                </h3>
                <fieldset>
                    <div  class="tab-pane  {{ $tab_1 }}" id="tab_details">          
                        <div class="box-body">
                            <input type="hidden" name="section_id" id="section_id" value="{{$Topics->webmaster_id}}" />
                            <input type="hidden" name="topic_id" id="topic_id" value="{{$Topics->id}}" />
                       
                        
                                @if($WebmasterSection->date_status)
                                    <div class="form-group row">
                                        <label for="date" class="col-sm-2 form-control-label">{!!  __('backend.topicDate') !!}
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                                    format: '{{ Helper::jsDateFormat() }}',
                                                    icons: {
                                                    time: 'fa fa-clock-o',
                                                    date: 'fa fa-calendar',
                                                    up: 'fa fa-chevron-up',
                                                    down: 'fa fa-chevron-down',
                                                    previous: 'fa fa-chevron-left',
                                                    next: 'fa fa-chevron-right',
                                                    today: 'fa fa-screenshot',
                                                    clear: 'fa fa-trash',
                                                    close: 'fa fa-remove'
                                                    }
                                                }">
                                                    {!! Form::text('date',Helper::formatDate($Topics->date), array('placeholder' => '','class' => 'form-control','id'=>'date','required'=>'')) !!}
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    {!! Form::hidden('date',$Topics->date, array('placeholder' => '','class' => 'form-control','id'=>'date')) !!}
                                @endif


                                @if($WebmasterSection->expire_date_status)
                                    <div class="form-group row">
                                        <label for="date"  class="col-sm-2 form-control-label">{!!  __('backend.expireDate') !!}
                                        </label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                                    format: '{{ Helper::jsDateFormat() }}',
                                                    icons: {
                                                    time: 'fa fa-clock-o',
                                                    date: 'fa fa-calendar',
                                                    up: 'fa fa-chevron-up',
                                                    down: 'fa fa-chevron-down',
                                                    previous: 'fa fa-chevron-left',
                                                    next: 'fa fa-chevron-right',
                                                    today: 'fa fa-screenshot',
                                                    clear: 'fa fa-trash',
                                                    close: 'fa fa-remove'
                                                    }
                                                }">
                                                    {!! Form::text('expire_date',Helper::formatDate($Topics->expire_date), array('placeholder' => '','class' => 'form-control','id'=>'expire_date')) !!}
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                
                               
                                
                                @if($WebmasterSection->sections_status!=0)
                                    <div class="form-group row by-activity">        
                                        <?php
                                                $title_var = "title_" . @Helper::currentLanguage()->code;
                                                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                                $t_arrow = ">";
                                                $categories = array();
                                                foreach ($Topics->categories as $category) {
                                                    $categories[] = $category->section_id; ?>
                                                    <input type="hidden" name="category" id="category" value="{{ $category->section_id}}" />      

                                                <?php } 
                                                
                                            //  print_r($categories);
                                                
                                        ?>   
                                                
                                        <label for="category_id" class="col-sm-2 form-control-label">{!!  __('backend.hasCategories') !!} </label>
                                        <div class="col-sm-10">
                                            <select name="category_id[]" id="category_id" class="form-control select2-multiple" ui-jp="select2"  ui-options="{theme: 'bootstrap'}" required>
                                            
                                                @foreach ($fatherSections as $fatherSection)
                                                    <?php
                                                    if ($fatherSection->$title_var != "") {
                                                        $ftitle = $fatherSection->$title_var;
                                                    } else {
                                                        $ftitle = $fatherSection->$title_var2;
                                                    }
                                                    ?>
                                                    <!-- <option value="{{ $fatherSection->id  }}" {{ (in_array($fatherSection->id,$categories)) ? "selected='selected'":""  }}>{{ $ftitle }}</option> -->
                                                    @foreach ($fatherSection->fatherSections as $subFatherSection)
                                                        <?php
                                                        if ($subFatherSection->$title_var != "") {
                                                            $fstitle = $subFatherSection->$title_var;
                                                        } else {
                                                            $fstitle = $subFatherSection->$title_var2;
                                                        }
                                                        ?>
                                                        <!-- <option value="{{ $subFatherSection->id  }}" {{ (in_array($subFatherSection->id,$categories)) ? "selected='selected'":""  }}> {!! $ftitle !!} {!! $t_arrow !!} {!! $fstitle !!}</option> -->

                                                        @foreach ($subFatherSection->fatherSections as $subFatherSection1)
                                                            <?php
                                                            if ($subFatherSection1->$title_var != "") {
                                                                $fsstitle = $subFatherSection1->$title_var;
                                                            } else {
                                                                $fsstitle = $subFatherSection1->$title_var2;
                                                            }
                                                            ?>
                                                            <!-- <option value="{{ $subFatherSection1->id  }}" {{ (in_array($subFatherSection1->id,$categories)) ? "selected='selected'":""  }}> {!! $ftitle !!} {!! $t_arrow !!} {!! $fstitle !!}{!! $t_arrow !!} {!! $fsstitle !!}</option> -->

                                                    
                                                            @foreach ($subFatherSection1->fatherSections as $subFatherSection2)
                                                                <?php
                                                                if ($subFatherSection2->$title_var != "") {
                                                                    $fssstitle = $subFatherSection2->$title_var;
                                                                } else {
                                                                    $fssstitle = $subFatherSection2->$title_var2;
                                                                }
                                                                ?>
                                                                <option value="{{ $subFatherSection2->id  }}" {{ (in_array($subFatherSection2->id,$categories)) ? "selected='selected'":""  }}> {!! $ftitle !!}{!! $t_arrow !!}{!! $fstitle !!}{!! $t_arrow !!}{!! $fsstitle !!} {!! $t_arrow !!} {!! $fssstitle !!}</option>
                                                            @endforeach
                                                        @endforeach                                             
                                                    @endforeach
                                                @endforeach                                        
                                            </select>                                    
                                        </div>
                                    </div>                            
                                
                                   
                                @endif 

                            

                                
                                @if($WebmasterSection->title_status)
                                    @foreach(Helper::languagesList() as $ActiveLanguage)
                                        @if($ActiveLanguage->box_status)
                                            <div class="form-group row">
                                                <label
                                                    class="col-sm-2 form-control-label">{!!  __('backend.topicName') !!} 
                                                </label>
                                                <div class="col-sm-10">
                                                    {!! Form::text('title_'.@$ActiveLanguage->code,$Topics->{'title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if($WebmasterSection->title_en == "Listings")   
                                    <div class='form-group row by-activity'>
                                                    <h4> Bookings and Billings </h4>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2">Booking Type</div>
                                        <div class="col-sm-2">Billing Type</div>
                                        <div class="col-sm-1">Unified Price</div>
                                        <div class="col-sm-0">Discount %</div>
                                        <div class="col-sm-1">Peak Season Price</div>
                                        <div class="col-sm-2">Guaranteed (21 -100)% </div>
                                        <div class="col-sm-1">Status </div>
                                        <div class="col-sm-0">  </div>
                                    
                                    </div>
                                
                                
                                    @if(count($bookandbill) != 0)
                                        
                                        @foreach ($bookandbill as $bab)                                
                                        <div class="form-group row removeclass{{$loop->index}}">
                                            <div class="col-sm-2"> 
                                                <input type="hidden" value="{{$bab->booking_id}}" name="booking_hidden[]" />
                                                <input type="hidden" value="{{$bab->bill_type}}" name="billing_hidden[]" />                                            
                                                <select  name="booking_type[]" id="booking_type[]" class="form-control selectbooking" aria-invalid="false"><option value="">Booking Type</option></select>
                                            </div>
                                            <div class="col-sm-2">
                                                <select name="billing_type[]" id="billing_type[]" class="form-control selectbilling" aria-invalid="false"><option value="">Billing Type</option></select>
                                            </div>
                                            <div class="col-sm-1">
                                                            {!! Form::text('u_price[]',$bab->u_price, array('placeholder' => 'Unified Price','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                            </div>
                                            <div class="col-sm-0">
                                            <select name="d_per[]" id="d_per[]" class="form-control selectbilling" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
                                            </div>
                                            <div class="col-sm-1">
                                                            {!! Form::text('p_price[]',$bab->p_price, array('placeholder' => 'Peak Season Price','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                            </div>
                                            <div class="col-sm-1">
                                                            {!! Form::text('l_price[]',$bab->l_price, array('placeholder' => 'Guaranteed %','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                                            
                                            </div>
                                          
                                                            
                                           
                                            <div class="col-sm-1">
                                            <select name="bill_status[]" id="bill_status[]" class="form-control selectbilling" aria-invalid="false">
                                                @for ($i = 0; $i <= 1; $i++)
                                                    @if($bab->status === $i)
                                                    <option value="{{ $i }}" selected="selected" >@if($i == 0) Inactive @else Active @endif</option>
                                                    @else 
                                                    <option value="{{ $i }}" >@if($i == 0) Inactive @else Active @endif</option>
                                                    @endif
                                                @endfor
                                            </select>
                                            </div>
                                            <div class="col-sm-0">
                                                @if($loop->index === 0)
                                                <div class="nav-link"  onclick="booking_fields();" data-toggle="dropdown"><i class="fa fa-fw fa-plus text-muted"></i></div>
                                                @else
                                                <div class="nav-link" onclick="remove_booking_fields({{$loop->index}});" data-toggle="dropdown"><i class="fa fa-fw fa-minus text-muted"></i></div>
                                                @endif
                                            </div>                                        
                                        </div>
                                        @endforeach
                                        <div class="form-group row" id="booking_fields">
                        
                                        </div>

                                    @else                            
                                        <div class="form-group row">
                                                <div class="col-sm-2">                                             
                                                    <select  name="booking_type[]" id="booking_type[]" class="form-control selectbooking" aria-invalid="false"><option value="">Booking Type</option></select>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select name="billing_type[]" id="billing_type[]" class="form-control selectbilling" aria-invalid="false"><option value="">Billing Type</option></select>
                                                </div>
                                                <div class="col-sm-1">
                                                                {!! Form::text('u_price[]','', array('placeholder' => 'Unified Price','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                                </div>
                                                <div class="col-sm-0">
                                                    <select name="d_per[]" id="d_per[]" class="form-control selectbilling" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
                                                </div>
                                                <div class="col-sm-1">
                                                                {!! Form::text('p_price[]','', array('placeholder' => 'Peak Season Price','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                                </div>
                                                <div class="col-sm-2">
                                                                {!! Form::text('l_price[]','', array('placeholder' => 'Guaranteed Low Price','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                                                
                                                </div>
                                                <div class="col-sm-1">
                                                    <select name="bill_status[]" id="bill_status[]" class="form-control selectbilling" aria-invalid="false">
                                                    @for ($i = 0; $i <= 1; $i++)                                                        
                                                        <option value="{{ $i }}" >@if($i == 0) Inactive @else Active @endif</option>                                                       
                                                    @endfor
                                                    </select>                                                    
                                                </div>
                                                <div class="col-sm-0">

                                                    <div class="nav-link"  onclick="booking_fields();" data-toggle="dropdown">
                                                    <i class="fa fa-fw fa-plus text-muted"></i>
                                                    </div>
                                                </div>                                        
                                        </div>
                                        <div class="form-group row" id="booking_fields"></div>
                                        
                                    @endif
                                
                                @endif

                                @if($WebmasterSection->longtext_status)
                                    @if($WebmasterSection->editor_status)
                                        @foreach(Helper::languagesList() as $ActiveLanguage)
                                            @if($ActiveLanguage->box_status)
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">{!!  __('backend.bannerDetails') !!} {!! @Helper::languageName($ActiveLanguage) !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        <div class="box p-a-xs">
                                                            {!! Form::textarea('details_'.@$ActiveLanguage->code,$Topics->{'details_'.@$ActiveLanguage->code}, array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control summernote_'.@$ActiveLanguage->code, 'dir'=>@$ActiveLanguage->direction,'ui-options'=>'{height: 300,callbacks: {
                                                                onImageUpload: function(files, editor, welEditable) {
                                                                    sendFile(files[0], editor, welEditable,"'.@$ActiveLanguage->code.'");
                                                                }
                                                            }}')) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach(Helper::languagesList() as $ActiveLanguage)
                                            @if($ActiveLanguage->box_status)
                                                <div class="form-group row">
                                                    <label
                                                        class="col-sm-2 form-control-label">{!!  __('backend.bannerDetails') !!} {!! @Helper::languageName($ActiveLanguage) !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::textarea('details_'.@$ActiveLanguage->code,$Topics->{'details_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control', 'dir'=>@$ActiveLanguage->direction,'rows'=>'5')) !!}
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endif


                                @if($WebmasterSection->type==2)
                                    <div class="form-group row">
                                        <label for="video_type" class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoType') !!}</label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label class="ui-check ui-check-md">
                                                    {!! Form::radio('video_type','0',($Topics->video_type==0) ? true : false, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')) !!}
                                                    <i class="dark-white"></i>
                                                    {{ __('backend.bannerVideoType1') }}
                                                </label>
                                                &nbsp; &nbsp;
                                                <label class="ui-check ui-check-md">
                                                    {!! Form::radio('video_type','1',($Topics->video_type==1) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')) !!}
                                                    <i class="dark-white"></i>
                                                    {{ __('backend.bannerVideoType2') }}
                                                </label>
                                                &nbsp; &nbsp;
                                                <label class="ui-check ui-check-md">
                                                    {!! Form::radio('video_type','2',($Topics->video_type==2) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="block";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')) !!}
                                                    <i class="dark-white"></i>
                                                    {{ __('backend.bannerVideoType3') }}
                                                </label>
                                                &nbsp; &nbsp;
                                                <label class="ui-check ui-check-md">
                                                    {!! Form::radio('video_type','3',($Topics->video_type==3) ? true : false, array('id' => 'video_type3','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("embed_link").value=""')) !!}
                                                    <i class="dark-white"></i>
                                                    Embed
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="files_div" style="display: {{ ($Topics->video_type ==0) ? "block" : "none" }}">
                                        <div class="form-group row">
                                            <label for="video_file"  class="col-sm-2 form-control-label">{!!  __('backend.topicVideo') !!}</label>
                                            <div class="col-sm-10">
                                                @if($Topics->video_type==0 && $Topics->video_file!="")
                                                    <div class="box p-a-xs">

                                                        <video width="380" height="230" controls>
                                                            <source src="{{ asset('uploads/topics/'.$Topics->video_file) }}"
                                                                    type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        <br>
                                                        <a target="_blank"
                                                        href="{{ asset('uploads/topics/'.$Topics->video_file) }}">
                                                            {{ $Topics->video_file }} </a>
                                                    </div>
                                                @endif
                                                {!! Form::file('video_file', array('class' => 'form-control','id'=>'video_file','accept'=>'*')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                            <div class="offset-sm-2 col-sm-10">
                                                <small>
                                                    <i class="material-icons">&#xe8fd;</i>
                                                    {!!  __('backend.videoTypes') !!}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="youtube_link_div"
                                        style="display: {{ ($Topics->video_type==1) ? "block" : "none" }}">
                                        <label for="youtube_link"
                                            class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoUrl') !!}</label>
                                        <div class="col-sm-10">
                                            {!! Form::text('youtube_link',$Topics->video_file, array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>'ltr')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row" id="vimeo_link_div"
                                        style="display: {{ ($Topics->video_type ==2) ? "block" : "none" }}">
                                        <label for="youtube_link"
                                            class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoUrl2') !!}</label>
                                        <div class="col-sm-10">
                                            {!! Form::text('vimeo_link',$Topics->video_file, array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>'ltr')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row" id="embed_link_div"
                                        style="display: {{ ($Topics->video_type ==3) ? "block" : "none" }}">
                                        <label for="embed_link"
                                            class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoUrl2') !!}</label>
                                        <div class="col-sm-10">
                                            {!! Form::textarea('embed_link',$Topics->video_file, array('placeholder' => '','class' => 'form-control','id'=>'embed_link', 'dir'=>'ltr','rows'=>'3')) !!}
                                        </div>
                                    </div>
                                @endif

                                @if($WebmasterSection->type==3)
                                    <div class="form-group row">
                                        <label for="audio_file"  class="col-sm-2 form-control-label">{!!  __('backend.topicAudio') !!}</label>
                                        <div class="col-sm-10">
                                            @if($Topics->audio_file!="")
                                                <div class="box p-a-xs">
                                                    <audio controls>
                                                        <source src="{{ asset('uploads/topics/'.$Topics->audio_file) }}"
                                                                type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <br>
                                                    <a target="_blank"
                                                    href="{{ asset('uploads/topics/'.$Topics->audio_file) }}"> {{ $Topics->audio_file }} </a>
                                                </div>
                                            @endif
                                            {!! Form::file('audio_file', array('class' => 'form-control','id'=>'audio_file','accept'=>'audio/*')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                        <div class="offset-sm-2 col-sm-10">
                                            <small>
                                                <i class="material-icons">&#xe8fd;</i>
                                                {!!  __('backend.audioTypes') !!}
                                            </small>
                                        </div>
                                    </div>
                                @endif

                                @if($WebmasterSection->photo_status)
                                    <div class="form-group row">
                                        <label for="photo_file" class="col-sm-2 form-control-label">{!!  __('backend.topicPhoto') !!}</label>
                                        <div class="col-sm-10">
                                            @if($Topics->photo_file!="")
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="topic_photo" class="col-sm-4 box p-a-xs">
                                                            <a target="_blank"
                                                            href="{{ asset('uploads/topics/'.$Topics->photo_file) }}"><img
                                                                    src="{{ asset('uploads/topics/'.$Topics->photo_file) }}"
                                                                    class="img-responsive">
                                                                {{ $Topics->photo_file }}
                                                            </a>
                                                            <br>
                                                            <a onclick="document.getElementById('topic_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                            class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                                        </div>
                                                        <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                            <a onclick="document.getElementById('topic_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                                <i class="material-icons">
                                                                    &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                                        </div>

                                                        {!! Form::hidden('photo_delete','0', array('id'=>'photo_delete')) !!}
                                                    </div>
                                                </div>
                                            @endif

                                            {!! Form::file('photo_file', array('class' => 'form-control','id'=>'photo_file','accept'=>'image/*')) !!}

                                        </div>
                                    </div>
                                    <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                        <div class="offset-sm-2 col-sm-10">
                                            <small>
                                                <i class="material-icons">&#xe8fd;</i>
                                                {!!  __('backend.imagesTypes') !!}
                                            </small>
                                        </div>
                                    </div>
                                @endif

                                @if($WebmasterSection->icon_status)
                                    <div class="form-group row">
                                        <label for="icon"
                                            class="col-sm-2 form-control-label">{!!  __('backend.sectionIcon') !!}</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                {!! Form::text('icon',$Topics->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')) !!}
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($WebmasterSection->attach_file_status)
                                    <div class="form-group row">
                                        <label for="attach_file"  class="col-sm-2 form-control-label">{!!  __('backend.topicAttach') !!}</label>
                                        <div class="col-sm-10">
                                            @if($Topics->attach_file!="")
                                                <div id="topic_attach" class="col-sm-4 box p-a-xs">
                                                    <a target="_blank"
                                                    href="{{ asset('uploads/topics/'.$Topics->attach_file) }}"> {{ $Topics->attach_file }} </a>
                                                    <br>
                                                    <a onclick="document.getElementById('topic_attach').style.display='none';document.getElementById('attach_delete').value='1';document.getElementById('undo2').style.display='block';"
                                                    class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                                </div>
                                                <div id="undo2" class="col-sm-4 p-a-xs" style="display: none">
                                                    <a onclick="document.getElementById('topic_attach').style.display='block';document.getElementById('attach_delete').value='0';document.getElementById('undo2').style.display='none';">
                                                        <i class="material-icons">
                                                            &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                                </div>
                                                {!! Form::hidden('attach_delete','0', array('id'=>'attach_delete')) !!}
                                            @endif
                                            {!! Form::file('attach_file', array('class' => 'form-control','id'=>'attach_file')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                        <div class="offset-sm-2 col-sm-10">
                                            <small>
                                                <i class="material-icons">&#xe8fd;</i>
                                                {!!  __('backend.attachTypes') !!}
                                            </small>
                                        </div>
                                    </div>
                                @endif


                                {{--Additional Feilds--}}
                                <?php
                                $previous_class = ''; 
                                ?>
                                @if(count($WebmasterSection->customFields) >0)
                                    <?php
                                    $cf_title_var = "title_" . @Helper::currentLanguage()->code;
                                    $cf_title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                    ?>
                                    @foreach($WebmasterSection->customFields as $customField)                            
                                        <?php
                                            if ($previous_class != $customField->css_class)
                                            
                                        
                                                // echo  "subhashini  -   ". $customField->css_class;
                                                    echo " <div class='form-group row by-activity'>
                                                    <h4> Others </h4>
                                                    </div>";
                                                
                                        ?>
                                    
                                        <?php

                                        // check permission
                                        $edit_permission_groups = [];
                                        if ($customField->edit_permission_groups != "") {
                                            $edit_permission_groups = explode(",", $customField->edit_permission_groups);
                                        }
                                        if (in_array(Auth::user()->permissions_id, $edit_permission_groups) || in_array(0, $edit_permission_groups) || $customField->edit_permission_groups == "") {
                                        // have permission & continue
                                        if ($customField->$cf_title_var != "") {
                                            $cf_title = $customField->$cf_title_var;
                                        } else {
                                            $cf_title = $customField->$cf_title_var2;
                                        }
                                        $cf_seo_title= str_replace(' ', '-', strtolower($cf_title));

                                        // check field language status
                                        $cf_land_identifier = "";
                                        $cf_land_active = false;
                                        $cf_land_dir = @Helper::currentLanguage()->direction;
                                        if ($customField->lang_code != "all") {
                                            $ct_language = @Helper::LangFromCode($customField->lang_code);
                                            $cf_land_identifier = @Helper::languageName($ct_language);
                                            $cf_land_dir = $ct_language->direction;
                                            if ($ct_language->box_status) {
                                                $cf_land_active = true;
                                            }
                                        }
                                        if ($customField->lang_code == "all") {
                                            $cf_land_active = true;
                                        }
                                        // required Status
                                        $cf_required = "";
                                        if ($customField->required) {
                                            $cf_required = "required";
                                        }

                                        $cf_saved_val = "";
                                        $cf_saved_val_array = array();
                                        if (count($Topics->fields) > 0) {
                                            foreach ($Topics->fields as $t_field) {
                                                if ($t_field->field_id == $customField->id) {
                                                    if ($customField->type == 7) {
                                                        // if multi check
                                                        $cf_saved_val_array = explode(", ", $t_field->field_value);
                                                    } else {
                                                        $cf_saved_val = $t_field->field_value;
                                                    }
                                                }
                                            }
                                        }


                                        ?>

                                        @if($cf_land_active)
                                            @if($customField->type ==12)
                                                {{--Vimeo Video Link--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!} <i class="fa fa-vimeo"></i>
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==11)
                                                {{--Youtube Video Link--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!} <i class="fa fa-youtube"></i>
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>'ltr')) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==10)
                                                {{--Video File--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}</label>
                                                    <div class="col-sm-10">
                                                        @if($cf_saved_val !="")
                                                            <?php
                                                            $file_name_id = 'topic_file_' . $customField->id;
                                                            $file_del_id = 'file_delete_' . $customField->id;
                                                            $file_old_id = 'file_old_' . $customField->id;
                                                            $file_undo_id = 'undo_' . $customField->id;
                                                            ?>
                                                            <div id="{{$file_name_id}}" class="col-sm-4 box p-a-xs">
                                                                <video width="380" height="230" controls>
                                                                    <source src="{{ asset('uploads/topics/'.$cf_saved_val) }}"
                                                                            type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                                <a target="_blank"
                                                                href="{{ asset('uploads/topics/'.$cf_saved_val) }}">
                                                                    {{ $cf_saved_val }}
                                                                </a>
                                                                <br>
                                                                <a onclick="document.getElementById('{{$file_name_id}}').style.display='none';document.getElementById('{{$file_del_id}}').value='1';document.getElementById('{{$file_undo_id}}').style.display='block';"
                                                                class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                                            </div>
                                                            <div id="{{$file_undo_id}}" class="col-sm-4 p-a-xs"
                                                                style="display: none">
                                                                <a onclick="document.getElementById('{{$file_name_id}}').style.display='block';document.getElementById('{{$file_del_id}}').value='0';document.getElementById('{{$file_undo_id}}').style.display='none';">
                                                                    <i class="material-icons">
                                                                        &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                                            </div>

                                                            {!! Form::hidden($file_del_id,'0', array('id'=>$file_del_id)) !!}
                                                            {!! Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)) !!}
                                                        @endif
                                                        {!! Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==9)
                                                {{--Attach File--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}</label>
                                                    <div class="col-sm-10">
                                                        @if($cf_saved_val !="")
                                                            <?php
                                                            $file_name_id = 'topic_file_' . $customField->id;
                                                            $file_del_id = 'file_delete_' . $customField->id;
                                                            $file_old_id = 'file_old_' . $customField->id;
                                                            $file_undo_id = 'undo_' . $customField->id;
                                                            ?>
                                                            <div id="{{$file_name_id}}" class="col-sm-4 box p-a-xs">
                                                                <a target="_blank"
                                                                href="{{ asset('uploads/topics/'.$cf_saved_val) }}">
                                                                    {{ $cf_saved_val }}
                                                                </a>
                                                                <br>
                                                                <a onclick="document.getElementById('{{$file_name_id}}').style.display='none';document.getElementById('{{$file_del_id}}').value='1';document.getElementById('{{$file_undo_id}}').style.display='block';"
                                                                class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                                            </div>
                                                            <div id="{{$file_undo_id}}" class="col-sm-4 p-a-xs"
                                                                style="display: none">
                                                                <a onclick="document.getElementById('{{$file_name_id}}').style.display='block';document.getElementById('{{$file_del_id}}').value='0';document.getElementById('{{$file_undo_id}}').style.display='none';">
                                                                    <i class="material-icons">
                                                                        &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                                            </div>

                                                            {!! Form::hidden($file_del_id,'0', array('id'=>$file_del_id)) !!}
                                                            {!! Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)) !!}
                                                        @endif
                                                        {!! Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'*')) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==8)
                                                {{--Photo File--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}</label>
                                                    <div class="col-sm-10">
                                                        @if($cf_saved_val !="")
                                                            <?php
                                                            $file_name_id = 'topic_file_' . $customField->id;
                                                            $file_del_id = 'file_delete_' . $customField->id;
                                                            $file_old_id = 'file_old_' . $customField->id;
                                                            $file_undo_id = 'undo_' . $customField->id;
                                                            ?>
                                                            <div id="{{$file_name_id}}" class="col-sm-4 box p-a-xs">
                                                                <a target="_blank"
                                                                href="{{ asset('uploads/topics/'.$cf_saved_val) }}"><img
                                                                        src="{{ asset('uploads/topics/'.$cf_saved_val) }}"
                                                                        class="img-responsive">
                                                                    {{ $cf_saved_val }}
                                                                </a>
                                                                <br>
                                                                <a onclick="document.getElementById('{{$file_name_id}}').style.display='none';document.getElementById('{{$file_del_id}}').value='1';document.getElementById('{{$file_undo_id}}').style.display='block';"
                                                                class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                                            </div>
                                                            <div id="{{$file_undo_id}}" class="col-sm-4 p-a-xs"
                                                                style="display: none">
                                                                <a onclick="document.getElementById('{{$file_name_id}}').style.display='block';document.getElementById('{{$file_del_id}}').value='0';document.getElementById('{{$file_undo_id}}').style.display='none';">
                                                                    <i class="material-icons">
                                                                        &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                                            </div>

                                                            {!! Form::hidden($file_del_id,'0', array('id'=>$file_del_id)) !!}
                                                            {!! Form::hidden($file_old_id,$cf_saved_val, array('id'=>$file_old_id)) !!}
                                                        @endif

                                                        {!! Form::file('customField_'.$customField->id, array('class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','accept'=>'image/*')) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==7)
                                                {{--Multi Check--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}</label>
                                                    <div class="col-sm-10">
                                                        
                                                        <select name="{{'customField_'.$customField->id}}[]"
                                                                id="{{'customField_'.$customField->id}}"
                                                                class="form-control select2-multiple" multiple
                                                                ui-jp="select2"
                                                                ui-options="{theme: 'bootstrap'}" {{$cf_required}}>
                                                            <?php
                                                            $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                            $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                                            if ($customField->$cf_details_var != "") {
                                                                $cf_details = $customField->$cf_details_var;
                                                            } else {
                                                                $cf_details = $customField->$cf_details_var2;
                                                            }
                                                            $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                            $line_num = 1;
                                                            ?>
                                                            @foreach ($cf_details_lines as $cf_details_line)
                                                                <option
                                                                    value="{{ $line_num  }}" {{ (in_array($line_num,$cf_saved_val_array)) ? "selected='selected'":""  }}>{{ $cf_details_line }}</option>
                                                                <?php
                                                                $line_num++;
                                                                ?>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==6)
                                                {{--Select--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    
                                                    
                                                    <input type="text" name="{!! $cf_seo_title!!}" id="{!! $cf_seo_title!!}" value="{!! $cf_saved_val !!}" />
                                                    </label>
                                                    <div class="col-sm-10">
                                                        <select name="{{'customField_'.$customField->id}}"
                                                                id="{{'customField_'.$customField->id}}"
                                                                class="form-control c-select" {{$cf_required}}>
                                                            <option value="">- - {!!  $cf_title !!} - -</option>
                                                            <?php
                                                            $cf_details_var = "details_" . @Helper::currentLanguage()->code;
                                                            $cf_details_var2 = "details_en" . env('DEFAULT_LANGUAGE');
                                                            if ($customField->$cf_details_var != "") {
                                                                $cf_details = $customField->$cf_details_var;
                                                            } else {
                                                                $cf_details = $customField->$cf_details_var2;
                                                            }
                                                            $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                            $line_num = 1;
                                                            ?>
                                                            @foreach ($cf_details_lines as $cf_details_line)
                                                                <option
                                                                    value="{{ $line_num  }}" {{ ($cf_saved_val == $line_num) ? "selected='selected'":""  }}>{{ $cf_details_line }}</option>
                                                                <?php
                                                                $line_num++;
                                                                ?>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==5)
                                                {{--Date & Time--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        <div>
                                                            <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                                                format: '{{ Helper::jsDateFormat() }} hh:mm A',
                                                                icons: {
                                                                time: 'fa fa-clock-o',
                                                                date: 'fa fa-calendar',
                                                                up: 'fa fa-chevron-up',
                                                                down: 'fa fa-chevron-down',
                                                                previous: 'fa fa-chevron-left',
                                                                next: 'fa fa-chevron-right',
                                                                today: 'fa fa-screenshot',
                                                                clear: 'fa fa-trash',
                                                                close: 'fa fa-remove'
                                                                }
                                                            }">
                                                                {!! Form::text('customField_'.$customField->id,Helper::formatDate($cf_saved_val)." ".date("h:i A", strtotime($cf_saved_val)), array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==4)
                                                {{--Date--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                                                format: '{{ Helper::jsDateFormat() }}',
                                                                icons: {
                                                                time: 'fa fa-clock-o',
                                                                date: 'fa fa-calendar',
                                                                up: 'fa fa-chevron-up',
                                                                down: 'fa fa-chevron-down',
                                                                previous: 'fa fa-chevron-left',
                                                                next: 'fa fa-chevron-right',
                                                                today: 'fa fa-screenshot',
                                                                clear: 'fa fa-trash',
                                                                close: 'fa fa-remove'
                                                                }
                                                            }">
                                                                {!! Form::text('customField_'.$customField->id,Helper::formatDate($cf_saved_val), array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==3)
                                                {{--Email Address--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::email('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==2)
                                                {{--Number--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::number('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'','min'=>0, 'dir'=>$cf_land_dir)) !!}
                                                    </div>
                                                </div>
                                            @elseif($customField->type ==1)
                                                {{--Text Area--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::textarea('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '','class' => 'form-control',$cf_required=>'', 'dir'=>$cf_land_dir,'rows'=>'5')) !!}
                                                    </div>
                                                </div>
                                            @else
                                                {{--Text Box--}}
                                                <div class="form-group row">
                                                    <label for="{{'customField_'.$customField->id}}"
                                                        class="col-sm-2 form-control-label">{!!  $cf_title !!}
                                                        {!! $cf_land_identifier !!}
                                                    </label>
                                                    <div class="col-sm-10">
                                                        {!! Form::text('customField_'.$customField->id,$cf_saved_val, array('placeholder' => '',
                                                            'class' => 'form-control','id'=>'customField_'.$customField->id,$cf_required=>'', 'dir'=>$cf_land_dir)) !!}
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                        <?php
                                        }
                                        $previous_class= $customField->css_class
                                        ?>
                                        
                                    @endforeach
                                @endif
                                {{--End of -- Additional Feilds--}}
                                @if($WebmasterSection->title_en == "Listings")  
                                    <input type="hidden" name="tabname" value="location" />              
                                    <div class="form-group row by-activity"><h4>Strategic Location & Nearby  </h4></div>
                                    <div class="row mar-bot">
                                        <div class="col-md-1"><div class="round-but">1</div></div>
                                        <div class="col-md-6">
                                            {!! Form::text('strategic_location1',$Listing[0]->strategic_location1, array('placeholder' => 'Name','class' => 'form-control','id'=>'strategic_location1')) !!}
                                            <!-- <input type="text" name="location_nearby_name1" placeholder="Name" required> -->
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group km-only">
                                                <!-- {!! Form::number('location_nearby_dis1','', array('placeholder' => 'Distance(in km)', ' class' => 'form-control','id'=>'discount_price')) !!} -->
                                                <input type="number" step="0.01" class="form-control" value="{{$Listing[0]->near_by1}}" name="near_by1" min="0" max="10" placeholder="Distance(in km)" >
                                                <span class="input-group-addon ">KM</span>
                                            </div>
                                            <!-- <input type="number" name="location_nearby_dis1" placeholder="Distance(in km)" required/> -->
                                        </div>
                                    </div>
            
                                    <div class="row mar-bot">
                                            <div class="col-md-1"><div class="round-but">2</div></div>
                                            <div class="col-md-6">
                                            {!! Form::text('strategic_location2',$Listing[0]->strategic_location2, array('placeholder' => 'Name','class' => 'form-control','id'=>'strategic_location2')) !!}                                        
                                            </div>
                                            <div class="col-md-5">
                                            <div class="input-group km-only"> 
                                                    <input type="number" step="0.01" min="0" max="10" value="{{$Listing[0]->near_by2}}" class="form-control" name="near_by2" placeholder="Distance(in km)" >
                                                    <span class="input-group-addon ">KM</span>
                                                </div>
                                                <!--<input type="number" name="location_nearby_dis2nd" placeholder="Distance(in km)" />-->
                                            </div>
                                    </div>
                                    <div class="row mar-bot">
                                            <div class="col-md-1"><div class="round-but">3</div></div>
                                            <div class="col-md-6">
                                            {!! Form::text('strategic_location3',$Listing[0]->strategic_location3, array('placeholder' => 'Name','class' => 'form-control','id'=>'strategic_location3')) !!}
                                            </div>  
                                            <div class="col-md-5">
                                            <div class="input-group km-only">
                                                    <input type="number"  step="0.01" class="form-control" value="{{$Listing[0]->near_by3}}" name="near_by3" min="0" max="10" placeholder="Distance (in km)" >
                                                    <span class="input-group-addon ">KM</span>
                                                </div>
                                                <!--<input type="number" name="location_nearby_dis3" placeholder="Distance (in km)" />-->
                                            </div>
                                    </div> 
                                @endif    
                                @if(@Auth::user()->permissionsGroup->active_status)
                                    @if($WebmasterSection->case_status)
                                        <div class="form-group row">
                                            <label for="link_status" class="col-sm-2 form-control-label">{!!  __('backend.status') !!}</label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label class="ui-check ui-check-md">
                                                        {!! Form::radio('status','1',($Topics->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')) !!}
                                                        <i class="dark-white"></i>
                                                        {{ __('backend.active') }}
                                                    </label>
                                                    &nbsp; &nbsp;
                                                    <label class="ui-check ui-check-md">
                                                        {!! Form::radio('status','0',($Topics->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')) !!}
                                                        <i class="dark-white"></i>
                                                        {{ __('backend.notActive') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                                
        
                                
                                                    
                                
                               
                                
                                
                                
                              
                          
                            
                    </div>
                
                </fieldset>
                @if($WebmasterSection->additional_fee_status)
                <h3>
                    <span class="icon"><i class="ti-email"></i></span>
                    <span class="title_text">Fees</span>
                </h3>
                <fieldset>                            
                    @include('dashboard.topics.tabs.additional')
                </fieldset>
                @endif  
                @if($WebmasterSection->activity_status)
                <h3>
                                <span class="icon"><i class="ti-email"></i></span>
                                <span class="title_text">Activity</span>
                </h3>
                <fieldset>
                                    @include('dashboard.topics.tabs.activity')
                </fieldset>
                @endif
                @if($WebmasterSection->package_status)
                <h3>
                                <span class="icon"><i class="ti-email"></i></span>
                                <span class="title_text">Package</span>
                </h3>
                <fieldset> 
                                    @include('dashboard.topics.tabs.package')
                </fieldset>
                @endif
                @if($WebmasterSection->extra_attach_file_status)
                <h3>
                                <span class="icon"><i class="ti-email"></i></span>
                                <span class="title_text">Photos</span>
                </h3>
                <fieldset> 
                                    @include('dashboard.topics.tabs.files')
                </fieldset>
                @endif
                
                @if($WebmasterSection->capacity_status)
                <h3>
                                <span class="icon"><i class="ti-email"></i></span>
                                <span class="title_text">Capacity</span>
                </h3>
                <fieldset> 
                                    @include('dashboard.topics.tabs.capacity')
                </fieldset>
                @endif
                @if($WebmasterSection->ammenities_status)
                <h3>
                                    <span class="icon"><i class="ti-email"></i></span>
                                    <span class="title_text">Ammenities</span>
                </h3>
                <fieldset> 
                                    @include('dashboard.topics.tabs.ammenities')
                </fieldset>
                @endif
                @if($WebmasterSection->multi_images_status)
                <h3>
                                    <span class="icon"><i class="ti-email"></i></span>
                                    <span class="title_text">Photos</span>
                </h3>
                <fieldset> 
                                    @include('dashboard.topics.tabs.photos')
                </fieldset>
                @endif
                @if($WebmasterSection->multi_video_status)
                <h3>
                                    <span class="icon"><i class="ti-email"></i></span>
                                    <span class="title_text">Videos</span>
                </h3>
                <fieldset> 
                                    @include('dashboard.topics.tabs.videos')
                </fieldset>
                @endif
            {{Form::close()}}  
        </div>
    </div>
</div>
    
    
@endsection



@push("after-scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });

        $("#checkAll2").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#checkAll4").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action2").change(function () {
            if (this.value == "delete") {
                $("#submit_all2").css("display", "none");
                $("#submit_show_msg2").css("display", "inline-block");
            } else {
                $("#submit_all2").css("display", "inline-block");
                $("#submit_show_msg2").css("display", "none");
            }
        });

        $("#action4").change(function () {
            if (this.value == "delete") {
                $("#submit_all4").css("display", "none");
                $("#submit_show_msg4").css("display", "inline-block");
            } else {
                $("#submit_all4").css("display", "inline-block");
                $("#submit_show_msg4").css("display", "none");
            }
        });

        $("#checkAll3").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action3").change(function () {
            if (this.value == "delete") {
                $("#submit_all3").css("display", "none");
                $("#submit_show_msg3").css("display", "inline-block");
            } else {
                $("#submit_all3").css("display", "inline-block");
                $("#submit_show_msg3").css("display", "none");
            }
        });

        $("#mapDivNew").click(function () {
            $("#mapDiv").css("display", "block");
            $("#mapDivBtns").css("display", "none");
        });

    </script>

    <script src="{{ asset('assets/dashboard/js/iconpicker/fontawesome-iconpicker.js') }}"></script>
    <script>
        $(function () {
          //  $('.icp-auto').iconpicker({placement: '{{ (@Helper::currentLanguage()->direction=="rtl")?"topLeft":"topRight" }}'});
        });

        // Js Slug
        function slugify(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }

        @foreach(Helper::languagesList() as $ActiveLanguage)
        @if($ActiveLanguage->box_status)
        $("#seo_title_{{ @$ActiveLanguage->code }}").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#title_in_engines_{{ @$ActiveLanguage->code }}").text($(this).val());
            } else {
                $("#title_in_engines_{{ @$ActiveLanguage->code }}").text("<?php echo $Topics->{'title_' . @$ActiveLanguage->code}; ?>");
            }
        });
        $("#seo_description_{{ @$ActiveLanguage->code }}").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#desc_in_engines_{{ @$ActiveLanguage->code }}").text($(this).val());
            } else {
                $("#desc_in_engines_{{ @$ActiveLanguage->code }}").text("<?php echo Helper::GeneralSiteSettings("site_desc_" . @$ActiveLanguage->code); ?>");
            }
        });
        $("#seo_url_slug_{{ @$ActiveLanguage->code }}").on('keyup change', function () {
            if ($(this).val() != "") {
                $("#url_in_engines_{{ @$ActiveLanguage->code }}").text("<?php echo url(''); ?>/" + slugify($(this).val()));
            } else {
                $("#url_in_engines_{{ @$ActiveLanguage->code }}").text("<?php echo Helper::topicURL($Topics->id, @$ActiveLanguage->code); ?>");
            }
        });
        @endif
        @endforeach
    </script>

    
    <script>
        function sendFile(file, editor, welEditable, lang) {
           // alert("hi")
            data = new FormData();
            data.append("file", file);
            data.append("_token", "{{csrf_token()}}");
            $.ajax({
                data: data,
                type: 'POST',
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    if (myXhr.upload) myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                    return myXhr;
                },
                url: "{{ route("topicsPhotosUpload") }}",
                cache: false,
                contentType: false,
                processData: false,
                success: function (url) {
                    var image = $('<img>').attr('src', '{{ asset("uploads/topics/") }}/' + url);
                    @foreach(Helper::languagesList() as $ActiveLanguage)
                        @if($ActiveLanguage->box_status)
                    if (lang == "{{ $ActiveLanguage->code }}") {
                        $('.summernote_{{ $ActiveLanguage->code }}').summernote("insertNode", image[0]);
                    }
                    @endif
                    @endforeach
                }
            });
        }

        // update progress bar
        function progressHandlingFunction(e) {
            if (e.lengthComputable) {
                $('progress').attr({value: e.loaded, max: e.total});
                // reset progress on complete
                if (e.loaded == e.total) {
                    $('progress').attr('value', '0.0');
                }
            }
        }
    </script>
        <script type="text/javascript">


Dropzone.autoDiscover = false;
    $(document).ready(function(){
        if( $('#category').length )  { 
                loadbookingtype(0) 
            }        
        $('#category_id').on('change', function () {             
                    loadbookingtype(0)                          
            });   
        var myDropzone = new Dropzone("#multipleFileUpload", 
        {
            url:"{{url('dashboard/')}}/"+$("#section_id").val()+"/topics/"+$("#topic_id").val()+"/photos",            
            maxFiles: 10,
            addRemoveLinks: true,
            autoProcessQueue: false,
            init: function () {
                var submitButton = document.querySelector("#submit");
                myDropzone = this;
                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); 
                });

                this.on('complete', function(){
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                });
            }
        });
    });
      
       

        function loadbookingtype(setselect) {    
           //alert("in load booking" +setselect)  
           if( $('#category').length )  {     // use this if you are using class to check
                $.ajax({
                    url: "{{url('dashboard/getbooking')}}?father_id="+$("#category").val(),
                    type: 'get',
                    success:loadbooking(setselect)
                    
                }); 
            }     
        }

        var loadbooking = function(setselect) {
          //  alert("hi"+setselect)
            return function(res1) {
            varname=  'select[name="booking_type[]"]:eq('+setselect+')';
            varhidden=  'input[name="booking_hidden[]"]:eq('+setselect+')';
           // alert(varhidden)
            var selected = $(varhidden).val();   
            //alert(selected)
            $(varname).html('<option value="">Booking Type</option>');
            $.each(res1, function (key, value) {      
               // alert(selected)                                   
                if (value.id==selected) {
                    $(varname).append('<option selected="selected" value="' + value.id + '">' + value.title_en+ '</option>');
                } else {
                    $(varname).append('<option  value="' + value.id + '">' + value.title_en+ '</option>');
                }
            });  
            loadbillingtype(setselect,selected);   
        };
      };

      

            function loadbillingtype(setselect,bookingId) {
              //  alert("in load billing" +setselect)               
               // alert(bookingId)
                $('select[name="billing_type[]"]:eq('+setselect+')').html('');
                $.ajax({
                    url: "{{url('dashboard/getbilling')}}?father_id="+bookingId,
                    type: 'get',
                    success: loadbilling(setselect)
                });
            }


            var loadbilling = function(setselect) {
              // alert("hi"+setselect)
                return function(res) {
                    varname=  'select[name="billing_type[]"]:eq('+setselect+')';
                    //  alert(varname)
                    selected='';
                    varhidden=  'input[name="billing_hidden[]"]:eq('+setselect+')';
                   // alert(varhidden)
                    var selected = $(varhidden).val(); 
                   // alert(selected)                       
                    $(varname).html('<option value="">Billing Type</option>');
                    $.each(res, function (key, value) { 
                        if (value.id==selected) {
                            $(varname).append('<option selected="selected" value="' + value.id + '">' + value.title_en+ '</option>');
                        } else {
                            $(varname).append('<option  value="' + value.id + '">' + value.title_en+ '</option>');
                        }                     
                    });
                    var babloop= $('.selectbooking').length;
                    
                    if (setselect  != (babloop -1)) {
                            var newselect=parseInt(setselect)
                            newselect=newselect+1;
                           // alert("load"+newselect)
                            loadbookingtype(newselect)   
                       
                    }
                };
      };


function countString(str, letter) {

// creating regex 
const re = new RegExp(letter, 'g');

// matching the pattern
const count = str.match(re).length;

return count;
}



function booking_fields() {
    var room = $('.selectbooking').length
    console.log(room)
   // alert(room)
    var objTo = document.getElementById('booking_fields')
  //  var divtest = document.createElement("div");
	objTo.setAttribute("class", "form-group row removeclass"+room);

   
    objTo.innerHTML += '<div class="col-sm-2"><select  name="booking_type[]" id="booking_type[]"  class="form-control selectbooking" aria-invalid="false"></select></div>';
    objTo.innerHTML += '<div class="col-sm-2"><select name="billing_type[]" id="billing_type[]" class="form-control selectbilling" aria-invalid="false"></select></div>';
    objTo.innerHTML += '<div class="col-sm-1"><input type="text" class="form-control" placeholder="Unified Price" name="u_price[]" /></div>';
    objTo.innerHTML += '<div class="col-sm-0"><select name="d_per[]" id="d_per[]" class="form-control selectbilling" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select></div>';
    objTo.innerHTML += '<div class="col-sm-1"><input type="text" class="form-control" placeholder="Peak Season Price" name="p_price[]" /></div>';
    objTo.innerHTML += '<div class="col-sm-1"><input type="text" class="form-control" placeholder="Guaranteed %" name="l_price[]" /></div>';
    objTo.innerHTML += '<div class="col-sm-1"><select id="bill_status[]"  name="bill_status[]"  class="form-control"><option value="0">Inactive</option><option value="1">Active</option></select>';
    objTo.innerHTML += '<div class="col-sm-0"><div class="nav-link"  onclick="remove_booking_fields('+ room +');" data-toggle="dropdown"><i class="fa fa-fw fa-minus text-muted"></i></div></div>';
 
    $.when( $("#booking_fields").length > 0).then(function(){  
      //  alert(room)  
        loadbookingtype(room)
    });
    
}
   function remove_booking_fields(rid) {
	   $('.removeclass'+rid).remove();
   }

   $('.selectbooking').change(function(){
   // alert($(this).index());
    sindex=$(this).index();
    var bookingId =$(this).val(); 
    loadbillingtype(sindex,bookingId)
  });

   $(document).on('change','.selectbooking',function(){
  //  alert($(this).index(".selectbooking"));
    sindex=$(this).index(".selectbooking");
    var bookingId =$(this).val(); 
    loadbillingtype(sindex,bookingId)
    });



    </script>


    <script src="{{ asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{ asset('assets/dashboard/vendor/minimalist-picker/dobpicker.js')}}"></script>
    <script src="{{ asset('assets/dashboard/js/main.js')}}"></script>
    

@endpush
@push("after-styles")
    <link href="{{ asset('assets/dashboard/js/iconpicker/fontawesome-iconpicker.min.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@endpush
