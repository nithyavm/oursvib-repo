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
        <div class="box">
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
                <h3><i class="material-icons">&#xe02e;</i> {{ __('backend.categoryNew') }}</h3>
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
            <div class="box-body">
                {{Form::open(['route'=>['categoriesStore',$WebmasterSection->id],'method'=>'POST', 'files' => true ])}}

                @if($WebmasterSection->sections_status==2)
                    <div class="form-group row">
                        <label for="father_id"
                               class="col-sm-2 form-control-label">{!!  __('backend.categoryFather') !!} </label>
                        <div class="col-sm-10">
                            <select name="father_id" id="father_id" class="form-control c-select" >
                                <option value="0">- - {!!  __('backend.categoryNoFather') !!} - -</option>
                                <?php
                                $title_var = "title_" . @Helper::currentLanguage()->code;
                                $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
                                ?>
                                @foreach ($fatherSections as $fatherSection)
                                    <?php
                                    if ($fatherSection->$title_var != "") {
                                        $title = $fatherSection->$title_var;
                                    } else {
                                        $title = $fatherSection->$title_var2;
                                    }
                                    ?>
                                    <option value="{{ $fatherSection->id  }}">{{ $title }}</option>
                                    @foreach ($fatherSection->subcategory as $subcategory)
                                     <?php
                                    if ($subcategory->$title_var != "") {
                                        $title1 = $subcategory->$title_var;
                                    } else {
                                        $title1 = $subcategory->$title_var2;
                                    }
                                    ?>
                                    <option value="{{ $subcategory->id  }}" >{{ $title }}>{{ $title1}}</option>
                                    @foreach ($subcategory->subcategory as $subcategory1)
                                     <?php
                                    if ($subcategory1->$title_var != "") {
                                        $title2 = $subcategory1->$title_var;
                                    } else {
                                        $title3 = $subcategory1->$title_var2;
                                    }
                                    ?>
                                    <option value="{{ $subcategory1->id  }}">{{ $title }}>{{ $title1}}>{{ $title2}}</option>
                                @endforeach
                                @endforeach
                                @endforeach
                               
                            </select> 

                         
                        </div>

                    </div>
                @else
                    {!! Form::hidden('father_id','0') !!}
                @endif

                @foreach(Helper::languagesList() as $ActiveLanguage)
                    @if($ActiveLanguage->box_status)
                        <div class="form-group row">
                            <label
                                class="col-sm-2 form-control-label">{!!  __('backend.categoryName') !!} {!! @Helper::languageName($ActiveLanguage) !!}
                            </label>
                            <div class="col-sm-10">
                                {!! Form::text('title_'.@$ActiveLanguage->code,'', array('placeholder' => '','class' => 'form-control','required'=>'', 'dir'=>@$ActiveLanguage->direction)) !!}
                            </div>
                        </div>
                    @endif
                @endforeach

                <div class="form-group row">
                    <label for="photo"
                           class="col-sm-2 form-control-label">{!!  __('backend.bannerPhoto') !!}</label>
                    <div class="col-sm-10">
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

                @if($WebmasterSection->section_icon_status)
                    <div class="form-group row">
                        <label for="icon"
                               class="col-sm-2 form-control-label">{!!  __('backend.sectionIcon') !!}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                {!! Form::text('icon','', array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'icon', 'data-placement'=>'bottomRight')) !!}
                                <span class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>
                @endif
               
                @if($WebmasterSection->title_en == "Package")
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label"> Price </label>
                        <div class="col-sm-10">
                            {!! Form::text('price','', array('placeholder' => '','class' => 'form-control','id'=>'price')) !!}
                        </div>
                </div>
                @endif
               <div id="booking_div" style="display:none">
                <div class="form-group row">
                    <label for="extra_attach_file_status1"
                           class="col-sm-2 form-control-label">Booking Type</label>
                    <div class="col-sm-10">
                        <div class="radio">
                        @foreach ($BookingType as $booking)
                        <?php
                                    if ($booking->$title_var != "") {
                                        $book_title = $booking->$title_var;
                                    } else {
                                        $book_title = $booking->$title_var2;
                                    }
                                    ?>
                            <label class="ui-check ui-check-md">
                                {!! Form::checkbox('booking_type[]',$booking->id,false, array('id' => $booking->id  ,'class'=>'has-value')) !!}
                                <i class="dark-white"></i>
                                {{ $book_title }}
                            </label>
                            &nbsp; &nbsp;
                         @endforeach
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Maximum Price</label>
                        <div class="col-sm-10">
                            {!! Form::text('minimum_price','', array('placeholder' => '','class' => 'form-control','id'=>'minimum_price')) !!}
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Minimum Price </label>
                        <div class="col-sm-10">
                            {!! Form::text('maximum_price','', array('placeholder' => '','class' => 'form-control','id'=>'maximum_price')) !!}
                        </div>
                </div>
             </div><!--  end of booking  -->
                <div class="form-group row m-t-md">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> {!! __('backend.add') !!}</button>
                        <a href="{{ route('categories',$WebmasterSection->id) }}"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> {!! __('backend.cancel') !!}</a>
                    </div>
                </div>

                {{Form::close()}}
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
    </script>

<script type="text/javascript">
        $(document).ready(function () {
            $('#father_id').on('change', function () {
                var fatherId = $(this).find("option:selected").text();

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

// take input from the user

    </script>
@endpush
