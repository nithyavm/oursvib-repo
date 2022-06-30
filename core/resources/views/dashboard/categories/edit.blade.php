<?php
$title_var = "title_" . @Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
if ($WebmasterSection->$title_var != "") {
    $WebmasterSectionTitle = $WebmasterSection->$title_var;
} else {
    $WebmasterSectionTitle = $WebmasterSection->$title_var2;
}
?>
@extends('dashboard.layouts.master')
@section('title', __('backend.sectionsOf')." ".$WebmasterSectionTitle)
@push("after-styles")
    <link href="{{ asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.min.css") }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@endpush
@section('content')
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
                <h3><i class="material-icons">&#xe3c9;</i> {{ __('backend.categoryEdit') }}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ __('backend.home') }}</a> /
                    <a>{!! $WebmasterSectionTitle !!}</a> /
                    <a>{{ __('backend.sectionsOf') }}  {!! $WebmasterSectionTitle !!}</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{ route('categories',$WebmasterSection->id) }}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <?php
        $tab_1 = "active";
        $tab_2 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link {{ $tab_1 }}" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> {{ __('backend.topicTabCategory') }}</span>
                    </a>
                </li>
                @if(Helper::GeneralWebmasterSettings("seo_status"))
                    <li class="nav-item inline">
                        <a class="nav-link  {{ $tab_2 }}" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> {{ __('backend.seoTabTitle') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  {{ $tab_1 }}" id="tab_details">
                    <div class="box-body">
                        {{Form::open(['route'=>['categoriesUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST', 'files' => true])}}

                        @if($WebmasterSection->sections_status==2)
                        <?php 
                        $fcat = 0;
                        $fsubcat = 0;
                        $fsubcat1 = 0;
                        $fsubcat2 = 0;
                        ?>
                            <div class="form-group row">
                                <label for="father_id"
                                       class="col-sm-2 form-control-label">{!!  __('backend.categoryFather') !!} </label>
                                <div class="col-sm-10">

                                    <select name="father_id" id="father_id" class="form-control c-select">
                                        <option value="0">- - {!!  __('backend.categoryNoFather') !!} - -</option>
                                        <?php
                                        $title_var = "title_" . @Helper::currentLanguage()->code;
                                        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                        $t_arrow = ">";
                                        
                                        ?>

                                    @foreach ($fatherSections as $fatherSection)
                                    
                                    <?php
                                    if ($fatherSection->$title_var != "") {
                                        $ftitle = $fatherSection->$title_var;
                                    } else {
                                        $ftitle = $fatherSection->$title_var2;
                                    }
                                   
                                    ?>
                                      @if($fatherSection->id == $Sections->father_id)  
                                        $fcat=1 
                                        @endif
                                    <option value="{{ $fatherSection->id  }}" {{ ($fatherSection->id == $Sections->father_id) ? "selected='selected'":""  }}>{!! $ftitle !!}</option>
                                    @foreach ($fatherSection->fatherSections as $subFatherSection)
                                        <?php
                                        if ($subFatherSection->$title_var != "") {
                                            $fftitle = $subFatherSection->$title_var;
                                        } else {
                                            $fftitle = $subFatherSection->$title_var2;
                                        }
                                        
                                        ?>
                                        @if($subFatherSection->id == $Sections->father_id) 
                                        $fcat=1  
                                        $fsubcat=1 
                                        @endif
                                        <option
                                            value="{{ $subFatherSection->id  }}" {{ ($subFatherSection->id == $Sections->father_id) ? "selected='selected'":""  }}>{!! $ftitle !!} {!! $t_arrow !!} {!! $fftitle !!}</option>
                                            @foreach ($subFatherSection->fatherSections as $subFatherSection1)
                                        <?php
                                        if ($subFatherSection1->$title_var != "") {
                                            $ffftitle = $subFatherSection1->$title_var;
                                        } else {
                                            $ffftitle = $subFatherSection1->$title_var2;
                                        }
                                       
                                        ?>
                                         @if($subFatherSection1->id == $Sections->father_id)  
                                        $fsubcat1=1 
                                        @endif
                                        <option
                                            value="{{ $subFatherSection1->id  }}"  {{ ($subFatherSection1->id == $Sections->father_id) ? "selected='selected'":""  }}>{!! $ftitle !!}{!! $t_arrow !!} {!! $fftitle !!} {!! $t_arrow !!} {!! $ffftitle !!}</option>
                                    @endforeach
                                        @endforeach
                                @endforeach
                                     
                                    </select>
                                </div>

                            </div>
                        @else
                            {!! Form::hidden('father_id',$Sections->father_id) !!}
                        @endif

                        @foreach(Helper::languagesList() as $ActiveLanguage)
                            @if($ActiveLanguage->box_status)
                                <div class="form-group row">
                                    <label
                                        class="col-sm-2 form-control-label">{!!  __('backend.categoryName') !!} {!! @Helper::languageName($ActiveLanguage) !!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('title_'.@$ActiveLanguage->code,$Sections->{'title_'.@$ActiveLanguage->code}, array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <div class="form-group row">
                            <label for="photo"
                                   class="col-sm-2 form-control-label">{!!  __('backend.sectionIcon') !!}</label>
                            <div class="col-sm-10">
                                @if($Sections->photo!="")
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="section_photo" class="col-sm-4 box p-a-xs">
                                                <a target="_blank"
                                                   href="{{ asset('uploads/sections/'.$Sections->photo) }}"><img
                                                        src="{{ asset('uploads/sections/'.$Sections->photo) }}"
                                                        class="img-responsive">
                                                    {{ $Sections->photo }}
                                                </a>
                                                <br>
                                                <a onclick="document.getElementById('section_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                   class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                            </div>
                                            <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                <a onclick="document.getElementById('section_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                    <i class="material-icons">
                                                        &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                            </div>

                                            {!! Form::hidden('photo_delete','0', array('id'=>'photo_delete')) !!}
                                        </div>
                                    </div>

                                @endif
                                {!! Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')) !!}
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

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label">{!!  __('backend.status') !!}</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        {!! Form::radio('status','1',($Sections->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')) !!}
                                        <i class="dark-white"></i>
                                        {{ __('backend.active') }}
                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        {!! Form::radio('status','0',($Sections->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')) !!}
                                        <i class="dark-white"></i>
                                        {{ __('backend.notActive') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        @if($WebmasterSection->section_icon_status)
                            <div class="form-group row">
                                <label for="icon"
                                       class="col-sm-2 form-control-label">{!!  __('backend.sectionIcon') !!}</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        {!! Form::text('icon',$Sections->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')) !!}
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        @endif
                       
                     
                        <div id="booking_div" >
                        <div class="form-group row">
                    <label for="extra_attach_file_status1"
                           class="col-sm-2 form-control-label">Booking Type</label>
                    <div class="col-sm-10">
                        <div class="radio">
                       <?php
                            $bookings = explode(',', $Sections->booking_type);
                           // print_r($bookings); ?>
                        @foreach ($BookingType as $booking)
                        <?php
                                    if ($booking->$title_var != "") {
                                        $book_title = $booking->$title_var;
                                    } else {
                                        $book_title = $booking->$title_var2;
                                    }
                                    ?>
                            <label class="ui-check ui-check-md">
                            @if (in_array($booking->id, $bookings))
                            {!! Form::checkbox('booking_type[]',$booking->id, true, array('id' => $booking->id  ,'class'=>'has-value')) !!}
                            @else
                                {!! Form::checkbox('booking_type[]',$booking->id, false, array('id' => $booking->id  ,'class'=>'has-value')) !!}
                                @endif
                           
                               
                                

                               
                            
                                <i class="dark-white"></i>
                                {{ $book_title }}
                            </label>
                            &nbsp; &nbsp;
                          
                         @endforeach
                        </div>
                    </div>
                </div>
                                 <div class="form-group row">
                                    <label
                                        class="col-sm-2 form-control-label">Maximum Price
                                    </label>
                                    <div class="col-sm-10">
                                    {!! Form::text('minimum_price','', array('placeholder' => '','class' => 'form-control','id'=>'minimum_price')) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-sm-2 form-control-label">Minimum Price
                                    </label>
                                    <div class="col-sm-10">
                                    {!! Form::text('maximum_price','', array('placeholder' => '','class' => 'form-control','id'=>'maximum_price')) !!}
                                    </div>
                                </div>
                                </div>
                           
                        <div class="form-group row m-t-md">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                        &#xe31b;</i> {!! __('backend.update') !!}</button>
                                <a href="{{ route('categories',$WebmasterSection->id) }}"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> {!! __('backend.cancel') !!}</a>
                            </div>
                        </div>

                        {{Form::close()}}
                    </div>
                </div>

                @include('dashboard.categories.seo')
            </div>
        </div>
    </div>
@endsection
@push("after-scripts")
    <script src="{{ asset("assets/dashboard/js/iconpicker/fontawesome-iconpicker.js") }}"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '{{ (@Helper::currentLanguage()->direction=="rtl")?"topLeft":"topRight" }}'});
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
                $("#title_in_engines_{{ @$ActiveLanguage->code }}").text("<?php echo $Sections->{'title_' . @$ActiveLanguage->code}; ?>");
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
                $("#url_in_engines_{{ @$ActiveLanguage->code }}").text("<?php echo Helper::categoryURL($Sections->id, @$ActiveLanguage->code); ?>");
            }
        });
        @endif
        @endforeach
    </script>

<script type="text/javascript">
        $(document).ready(function () {
            $('#father_id').on('change', function () {
               
                var fatherId = $(this).find("option:selected").text();
                //alert(fatherId);
                var letterToCheck =">";
//passing parameters and calling the function
        const result = countString(fatherId, letterToCheck);
                if(result == 2)
                $("#booking_div").show(); 
                else
                $("#booking_div").hide(); 
               
            });
           
        });

        function countString(str, letter) {

// creating regex 
const re = new RegExp(letter, 'g');

// matching the pattern
const count = str.match(re).length;

return count;
}




    </script>
@endpush
